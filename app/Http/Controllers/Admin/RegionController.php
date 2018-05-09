<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateRegionRequest;
use App\Http\Requests\Admin\UpdateRegionRequest;
use App\Repositories\Admin\RegionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RegionController extends AppBaseController
{
    /** @var  RegionRepository */
    private $regionRepository;

    public function __construct(RegionRepository $regionRepo)
    {
        $this->regionRepository = $regionRepo;
    }

    /**
     * Display a listing of the Region.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->regionRepository->pushCriteria(new RequestCriteria($request));
        $regions = $this->regionRepository->paginate(20);

        return view('admin.regions.index')
            ->with('regions', $regions);
    }

    /**
     * Show the form for creating a new Region.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.regions.create');
    }

    /**
     * Store a newly created Region in storage.
     *
     * @param CreateRegionRequest $request
     *
     * @return Response
     */
    public function store(CreateRegionRequest $request)
    {
        $input = $request->all();

        $region = $this->regionRepository->create($input);

        Flash::success('Region saved successfully.');

        return redirect(route('admin.regions.index'));
    }

    /**
     * Display the specified Region.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $region = $this->regionRepository->findWithoutFail($id);

        if (empty($region)) {
            Flash::error('Region not found');

            return redirect(route('admin.regions.index'));
        }

        return view('admin.regions.show')->with('region', $region);
    }

    /**
     * Show the form for editing the specified Region.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $region = $this->regionRepository->findWithoutFail($id);

        if (empty($region)) {
            Flash::error('Region not found');

            return redirect(route('admin.regions.index'));
        }

        return view('admin.regions.edit')->with('region', $region);
    }

    /**
     * Update the specified Region in storage.
     *
     * @param  int              $id
     * @param UpdateRegionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegionRequest $request)
    {
        $region = $this->regionRepository->findWithoutFail($id);

        if (empty($region)) {
            Flash::error('Region not found');

            return redirect(route('admin.regions.index'));
        }

        $region = $this->regionRepository->update($request->all(), $id);

        Flash::success('Region updated successfully.');

        return redirect(route('admin.regions.index'));
    }

    /**
     * Remove the specified Region from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $region = $this->regionRepository->findWithoutFail($id);

        if (empty($region)) {
            Flash::error('Region not found');

            return redirect(route('admin.regions.index'));
        }

        $this->regionRepository->delete($id);

        Flash::success('Region deleted successfully.');

        return redirect(route('admin.regions.index'));
    }
}
