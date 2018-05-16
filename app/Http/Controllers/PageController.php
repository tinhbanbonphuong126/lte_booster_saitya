<?php

namespace App\Http\Controllers;

use App\Mail\AboutUsMailable;
use App\Repositories\Admin\BunjouchiRepository;
use App\Repositories\Admin\RegionRepository;
use App\Repositories\Admin\StationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        return view("home");
    }


    function aboutUs(BunjouchiRepository $bunjouchiRepository)
    {
        $bunjouchis = $bunjouchiRepository->findWhere(["status" => "0"]);
        return view("about-us", compact("bunjouchis"));
    }

    function submitForm(Request $request)
    {
        $name = $request->get("name");
        $furigana = $request->get("furigana");
        $mail_address = trim($request->get("mail_address"));
        $tel_number = $request->get("tel_number");
        $toiawase_content = $request->get("toiawase_content");

        if(!$mail_address) {
            Mail::to("tinhbanbonphuong126@gmail.com")->send(new AboutUsMailable($name, $furigana, $mail_address, $tel_number, $toiawase_content));
            return redirect()->route("home");
        }

        return "Email not valid";
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
        $currentRegion = $regionRepository->findWithoutFail($id);

        if ($id) {
            $schoolList = $currentRegion->school->pluck("id")->toArray();
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
            $bunjouchi = $bunjouchiRepository->findWithoutFail($id);
            if($bunjouchi) {
                $prices = $bunjouchi->prices;
            } else {
                $prices = [];
            }
            return view("bunjouchi_detail", compact("bunjouchi", "prices"));
        }
    }

}
