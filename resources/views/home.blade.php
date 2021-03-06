@extends('layouts.frontend.app')

@section('title', 'サティヤ不動産ホームページ')
@section('description', 'サティヤ不動産ホームページ')
@section('keywords', 'サティヤ不動産ホームページ')

@section('style')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY&language=ja&region=JP"></script>
    <link rel="stylesheet" href="{{ asset("css/home/home.css") }}" type="text/css" media="all"/>

@endsection

@section('content')
    <div class="main-content">
        <div class="top_banner">

            <div class="bound_face">
                <img class="left_eye fuwafuwa" src="{{ asset("img/home/eye_inside.png") }}" alt="Left eye">
                <img class="right_eye fuwafuwa" src="{{ asset("img/home/eye_inside.png") }}" alt="Right eye">
            </div>

            <div class="container bound_text_face">
                <div class="text_face">
                    <p class="first">あなたに合ったぴったりの</p>
                    <p class="second">住まい（分譲地）を見つけたい…</p>
                    <p class="third">そんな方、お任せください。</p>
                </div>
            </div>

        </div>

        <div class="naiyou_page">
            <div class="container">
                <div class="kittsu">キッシー<span>(丸亀在住)</span></div>
                <div class="slogan">
                    サティヤ不動産は高松市、丸亀市、坂出市を中心とした香川県の不動産売買等のご紹介を行っております。
                    <br class="br_creative"/>
                    不動産に関する事なら、どんな事でもお気軽にご相談下さい。
                    <span class="pink_text">新築分譲中地 続々と登場中！</span>
                </div>
                <div class="aloha_askout">
                    <button class="btn search">
                        コゾタウン分譲地SEARCH
                    </button>
                    <div class="osumai">
                        香川でお住まいをお探しの方にオススメの売土地です。
                        <br class="magic_break"/>
                        立地条件なしの区画、工務店は決定済で土地だけお探しの方にも嬉しい分譲地等ご用意しています。
                    </div>
                </div>
            </div>


            <div class="max_search">
                <div class="bounce_img">
                    <a href="{{ route("chizuSearch") }}">
                        <img src="{{ asset("img/home/search_1.png") }}" alt="Image Thumbnail">
                    </a>
                    <a class="middle" href="{{ route("schoolSearch") }}">
                        <img src="{{ asset("img/home/search_2.png") }}" alt="Image Thumbnail">
                    </a>
                    <a href="{{ route("ekiSearch") }}">
                        <img src="{{ asset("img/home/search_3.png") }}" alt="Image Thumbnail">
                    </a>
                </div>
            </div>

            <div class="search_usage">
                <div class="container">
                    <div class="upper_box_search">
                        サティヤ不動産は高松市、丸亀市、坂出市を中心とした<span class="pink_text">香川県の「売りたい」「買いたい」</span> ご希望の方、
                        不動産に関する質問は何でもお気軽にご相談ください。
                    </div>
                </div>

                <div class="search_button_div container">
                    <button class="btn btn_search">扱い物件SEARCH</button>
                </div>
                <div class="lower_box_search">
                    マンション・アパート・戸建などの不動産賃貸物件の仲介を行っております。
                    <br/>
                    店舗や事務所などの商業物件も数多く取り扱っておりますので、お客様のニーズに合った物件をご紹介させていただけます。
                </div>
                <div class="container">
                    <div class="bounce_way_pc">
                        <div class="row">
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/list/estate/buk/kr/058565"><img
                                            class="cell_image" src="{{ asset("img/home/way_1.png") }}" alt=""></a>
                            </div>
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/list/estate/buk/ks/058565"><img
                                            class="cell_image" src="{{ asset("img/home/way_2.png") }}" alt=""></a>
                            </div>
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/buy/ahcs/satya-fudousan.html"><img
                                            class="cell_image" src="{{ asset("img/home/way_3.png") }}" alt=""></a>
                            </div>
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/list/estate/buk/jr/058565"><img
                                            class="cell_image" src="{{ asset("img/home/way_4.png") }}" alt=""></a>
                            </div>
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/list/estate/buk/ks14/058565"><img
                                            class="cell_image" src="{{ asset("img/home/way_5.png") }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="bounce_way_phone">
                        <div class="row">
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/list/estate/buk/kr/058565"><img
                                            class="cell_image" src="{{ asset("img/home/way_1.png") }}" alt=""></a>
                            </div>
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/list/estate/buk/ks/058565"><img
                                            class="cell_image" src="{{ asset("img/home/way_2.png") }}" alt=""></a>
                            </div>
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/buy/ahcs/satya-fudousan.html"><img
                                            class="cell_image" src="{{ asset("img/home/way_3.png") }}" alt=""></a>
                            </div>
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/list/estate/buk/jr/058565"><img
                                            class="cell_image" src="{{ asset("img/home/way_4.png") }}" alt=""></a>
                            </div>
                            <div class="cell_div">
                                <a target="_blank" href="https://www.athome.co.jp/list/estate/buk/ks14/058565"><img
                                            class="cell_image" src="{{ asset("img/home/way_5.png") }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project container">
                <div class="button_project">
                    <button class="btn btn_prj">PROJECT</button>
                </div>
                <div class="bounce_ctn_prj_pc">
                    <div class="row">
                        <div class="cell_prj">
                            <a target="_blank" href="https://www.athome.co.jp/ahcs/satya-fudousan.html">
                                <img src="{{ asset("img/home/project_1.png") }}" alt="Image Thumbnail">
                            </a>
                        </div>
                        <div class="cell_prj">
                            <a target="_blank" href="http://www.satya.co.jp/sale/index.html" class="cell_prj">
                                <img src="{{ asset("img/home/project_2.png") }}" alt="Image Thumbnail">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bounce_ctn_prj_phone">
                    <div class="row">
                        <div class="cell_prj">
                            <a target="_blank" href="https://www.athome.co.jp/ahcs/satya-fudousan.html">
                                <img src="{{ asset("img/home/project_1.png") }}" alt="Image Thumbnail">
                            </a>
                        </div>
                        <div class="cell_prj">
                            <a target="_blank" href="http://www.satya.co.jp/sale/index.html" class="cell_prj">
                                <img src="{{ asset("img/home/project_2.png") }}" alt="Image Thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map container">
                <div class="button_map">
                    <button class="btn btn_map">ACCESS MAP</button>
                </div>
                <div class="google_map" id="googleMap">
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset("js/home/home.js") }}"></script>
    <script type="text/javascript">
        <!--Javascript here-->
    </script>
@endsection