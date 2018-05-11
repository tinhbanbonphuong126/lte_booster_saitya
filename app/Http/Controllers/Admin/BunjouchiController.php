<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateBunjouchiRequest;
use App\Http\Requests\Admin\UpdateBunjouchiRequest;
use App\Repositories\Admin\BunjouchiRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\RegionRepository;
use App\Repositories\Admin\RouteRepository;
use App\Repositories\Admin\SchoolRepository;
use App\Repositories\Admin\StationRepository;
use Illuminate\Http\Request;
use Flash;
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
        $bunjouchis = $this->bunjouchiRepository->paginate(20);

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
        $input = $request->all();

        $bunjouchi = $this->bunjouchiRepository->create($input);

        Flash::success('Bunjouchi saved successfully.');

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
            Flash::error('Bunjouchi not found');

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
    public function edit($id)
    {
        $bunjouchi = $this->bunjouchiRepository->findWithoutFail($id);

        if (empty($bunjouchi)) {
            Flash::error('Bunjouchi not found');

            return redirect(route('admin.bunjouchis.index'));
        }

        return view('admin.bunjouchis.edit')->with('bunjouchi', $bunjouchi);
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

        $bunjouchi = $this->bunjouchiRepository->update($request->all(), $id);

        Flash::success('Bunjouchi updated successfully.');

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
            Flash::error('Bunjouchi not found');

            return redirect(route('admin.bunjouchis.index'));
        }

        $this->bunjouchiRepository->delete($id);

        Flash::success('Bunjouchi deleted successfully.');

        return redirect(route('admin.bunjouchis.index'));
    }
}
