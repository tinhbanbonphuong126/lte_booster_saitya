<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateBunjouchiRequest;
use App\Http\Requests\Admin\UpdateBunjouchiRequest;
use App\Models\Admin\Price;
use App\Repositories\Admin\BunjouchiRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\RegionRepository;
use App\Repositories\Admin\RouteRepository;
use App\Repositories\Admin\SchoolRepository;
use App\Repositories\Admin\StationRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BunjouchiController extends AppBaseController
{
    /** @var  BunjouchiRepository */
    private $bunjouchiRepository;

    public function __construct(BunjouchiRepository $bunjouchiRepo)
    {
        $this->bunjouchiRepository = $bunjouchiRepo;
    }

    /**
     * Display a listing of the Bunjouchi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bunjouchiRepository->pushCriteria(new RequestCriteria($request));
        $bunjouchis = $this->bunjouchiRepository->orderBy('id', 'DESC')->paginate(10);

        return view('admin.bunjouchis.index')
            ->with('bunjouchis', $bunjouchis);
    }

    /**
     * Show the form for creating a new Bunjouchi.
     *
     * @return Response
     */
    public function create(RegionRepository $regionRepository, SchoolRepository $schoolRepository, RouteRepository $routeRepository, StationRepository $stationRepository)
    {
        $regions = $regionRepository->pluck('name', 'id');
        $schools = $schoolRepository->get(['id', 'name', 'region_id']);
        $routes = $routeRepository->pluck('route', 'id');
        $stations = $stationRepository->get(['id', 'name', 'route_id']);

        return view('admin.bunjouchis.create', compact('regions', 'schools', 'routes', 'stations'));
    }

    /**
     * Store a newly created Bunjouchi in storage.
     *
     * @param CreateBunjouchiRequest $request
     *
     * @return Response
     */
    public function store(CreateBunjouchiRequest $request)
    {

        $input = $request->except(['_token', 'map_url', 'document_url', 'prices']);

        //Handle File Upload
        $map_url = $request->file('map_url');
        $document_url = $request->file('document_url');
        if($map_url) {
            $name_map = time() . '_' . $map_url->getClientOriginalName();
            $input['map_url'] = $name_map;
            $destinationPath_m = public_path('/uploads/bunjouchis');
            $map_url->move($destinationPath_m, $input['map_url']);
        }
        if ($document_url) {
            $name_doc = time() . '_' . $document_url->getClientOriginalName();
            $input['document_url'] = $name_doc;
            $destinationPath_doc = public_path('/uploads/bunjouchis');
            $document_url->move($destinationPath_doc, $input['document_url']);
        }
        //End File Upload

        $bunjouchi = $this->bunjouchiRepository->create($input);

        //Handle Prices Block

        if($bunjouchi) {
            $prices = $request->get("prices");

            foreach($prices as $price) {
                if($price["bangou"] && $price["description"]) {
                    $bunjouchi->prices()->save(new Price($price));
                }
            }

        }


        Flash::success('分譲地を保存しました。');

        return redirect(route('admin.bunjouchis.index'));
    }

    /**
     * Display the specified Bunjouchi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bunjouchi = $this->bunjouchiRepository->findWithoutFail($id);

        if (empty($bunjouchi)) {
            Flash::error('分譲地は存在がありません');

            return redirect(route('admin.bunjouchis.index'));
        }

        return view('admin.bunjouchis.show')->with('bunjouchi', $bunjouchi);
    }

    /**
     * Show the form for editing the specified Bunjouchi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id ,RegionRepository $regionRepository, SchoolRepository $schoolRepository, RouteRepository $routeRepository, StationRepository $stationRepository)
    {
        $bunjouchi = $this->bunjouchiRepository->findWithoutFail($id);

        if (empty($bunjouchi)) {
            Flash::error('分譲地は存在がありません');

            return redirect(route('admin.bunjouchis.index'));
        }

        $regions = $regionRepository->pluck('name', 'id');
        $schools = $schoolRepository->get(['id', 'name', 'region_id']);

        $routes = $routeRepository->pluck('route', 'id');
        $stations = $stationRepository->get(['id', 'name', 'route_id']);

        return view('admin.bunjouchis.edit', compact('regions', 'schools', 'routes', 'stations'))->with('bunjouchi', $bunjouchi);
    }

    /**
     * Update the specified Bunjouchi in storage.
     *
     * @param  int              $id
     * @param UpdateBunjouchiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBunjouchiRequest $request)
    {
        $bunjouchi = $this->bunjouchiRepository->findWithoutFail($id);

        if (empty($bunjouchi)) {
            Flash::error('Bunjouchi not found');

            return redirect(route('admin.bunjouchis.index'));
        }

        //More
        $input = $request->except(["_token", "map_url", "document_url", "prices"]);

        //Handle File Upload
        $map_url = $request->file('map_url');
        $document_url = $request->file('document_url');

//        dd($map_url);

        if ($map_url) {

            $name_map = time() . '_' . $map_url->getClientOriginalName();
            $input['map_url'] = $name_map;
            $destinationPath_m = public_path('uploads/bunjouchis');
            $map_url->move($destinationPath_m, $input['map_url']);

            $usersMap = public_path("uploads/bunjouchis/{$bunjouchi->map_url}"); // get previous image from folder
            $usersMapBin = public_path("uploads/bunjouchis/bin/{$bunjouchi->map_url}"); // get previous image from folder


            if (File::exists($usersMap)) {
                // Unlink or remove previous image from folder
                //unlink($usersMap);

                //Move old file to bin folder
                File::move($usersMap, $usersMapBin);
            }

        }
        if ($document_url) {
            $name_doc = time() . '_' . $document_url->getClientOriginalName();
            $input['document_url'] = $name_doc;
            $destinationPath_doc = public_path('/uploads/bunjouchis');
            $document_url->move($destinationPath_doc, $input['document_url']);

            $usersDocument = public_path("uploads/bunjouchis/{$bunjouchi->document_url}"); // get previous image from folder
            $usersDocumentBin = public_path("uploads/bunjouchis/bin/{$bunjouchi->document_url}"); // get previous image from folder
            if (File::exists($usersDocument)) {
                // Unlink or remove previous image from folder
                //unlink($usersDocument);

                //Move old file to bin folder
                File::move($usersDocument, $usersDocumentBin);
            }
        }
        //End File Upload


        $bunjouchi = $this->bunjouchiRepository->update($input, $id);


        if ($bunjouchi) {
            $prices = $request->get("prices");
            $bunjouchi->prices()->delete();

            if($prices) {
                foreach ($prices as $price) {
                    $bunjouchi->prices()->save(new Price($price));
                }
            }

        }


        Flash::success('分譲地は更新されました。');

        return redirect(route('admin.bunjouchis.index'));
    }

    /**
     * Remove the specified Bunjouchi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bunjouchi = $this->bunjouchiRepository->findWithoutFail($id);

        if (empty($bunjouchi)) {
            Flash::error('分譲地は存在がありません。');

            return redirect(route('admin.bunjouchis.index'));
        }

        $this->bunjouchiRepository->delete($id);

        Flash::success('分譲地は削除されました。');

        return redirect(route('admin.bunjouchis.index'));
    }
}
