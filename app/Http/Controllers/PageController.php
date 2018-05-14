<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\BunjouchiRepository;
use App\Repositories\Admin\RegionRepository;
use App\Repositories\Admin\StationRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    /**
     * Return Home Page
     *
     * @return string
     */
    function home()
    {
        return "HOME PAGE";
    }


    function aboutUs(BunjouchiRepository $bunjouchiRepository)
    {
        $bunjouchis = $bunjouchiRepository->all();
        return view("contact-us", compact("bunjouchis"));
    }

    function schoolSearch($id = null, RegionRepository $regionRepository, BunjouchiRepository $bunjouchiRepository)
    {
        $regions = $regionRepository->all();

        if($id) {
            $bunjouchis = $bunjouchiRepository->findWhere(["school_id" => $id]);
        } else {
            $bunjouchis = $bunjouchiRepository->all();
        }

        return view("school-search", compact('regions','bunjouchis'));
    }

    function chizuSearch($id = null, RegionRepository $regionRepository, BunjouchiRepository $bunjouchiRepository)
    {
        $regions = $regionRepository->all();
        $currentRegion = $regionRepository->find($id);
        $schoolList = $currentRegion->school->pluck("id")->toArray();

        if ($id) {
            $bunjouchis = $bunjouchiRepository->findWhereIn("school_id", $schoolList);
        } else {
            $bunjouchis = $bunjouchiRepository->all();
        }

        return view("chizu-search", compact('currentRegion', 'regions', 'bunjouchis'));
    }

    function ekiSearch($id = null, BunjouchiRepository $bunjouchiRepository)
    {
        if ($id) {
            $bunjouchis = $bunjouchiRepository->findWhere(["station_id" => $id]);
        } else {
            $bunjouchis = $bunjouchiRepository->all();
        }

        return view("eki-search", compact("bunjouchis"));
    }

    function bunjouchiDetail($id = null, BunjouchiRepository $bunjouchiRepository)
    {
        if($id) {

            $bunjouchi = $bunjouchiRepository->find($id);
            return view("bunjouchi-detail", compact("bunjouchi"));
        }
    }
}
