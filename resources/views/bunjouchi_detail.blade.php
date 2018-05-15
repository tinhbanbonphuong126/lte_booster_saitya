@extends('layouts.frontend.app')

@section('title', '分譲地詳細')
@section('description', '分譲地詳細')
@section('keywords', '分譲地詳細')

@section('style')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY&language=ja&region=JP"></script>
    <link rel="stylesheet" href="{{ asset("css/about_us_detail/about_us_detail.css") }}" type="text/css" media="all"/>
    <style tyle="text/css">

    </style>
@endsection

@section('content')

    <div class="main-content">
        <div class="top_banner_gazou">
            @include("layouts.frontend.partial.component.cpn_header_banner_gazou")
        </div>

        <div class="naiyou_page container">

            <ul class="bound_ul">
                <li class="cell_li">
                    <span class="label_rui">分譲中</span>
                    <span class="description_rui">コゾタウン長尾</span>
                </li>
            </ul>


            <div class="bunjochi_detail">
                <div class="detail_li">
                    <!--<div class="detail_li">-->
                    <div class="bound_detail">
                        <div class="kugazu">
                            <div class="title_blue">区画図</div>
                            <div class="img_kugazu">
                                <img src="{{ asset("img/about-us/kugazu.png") }}" alt="区画図">
                            </div>
                        </div>
                        <div class="butsuken">
                            <div class="title_blue">物件概要</div>
                            <div class="bounce_butsuken">
                                <ul>
                                    <li class="cell_li_child">
                                        <span class="before">・住所</span>
                                        <span class="after">丸亀市金倉町</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・土地面積</span>
                                        <span class="after">204.35㎡(61.81坪)～301.19㎡(93.23坪)</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・地目</span>
                                        <span class="after">宅地</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・総区画</span>
                                        <span class="after">11区画</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・建ぺい率</span>
                                        <span class="after">70％</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・容積率</span>
                                        <span class="after">200％</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・用途地域</span>
                                        <span class="after">無指定</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・排水</span>
                                        <span class="after">浄化槽</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・取引態様</span>
                                        <span class="after">売主</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="kakaku">
                            <div class="title_blue">価格</div>
                            <div class="bounce_kakaku">
                                <ul>
                                    <li class="cell_li_child">
                                        <span class="before">1号地</span>
                                        <span class="after">227.75㎡	68.89坪	13万円</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">2号地</span>
                                        <span class="after">売約済み</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">3号地</span>
                                        <span class="after">217.62㎡	65.83坪	13万円</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">4号地</span>
                                        <span class="after">売約済み</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">5号地</span>
                                        <span class="after">売約済み</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">6号地</span>
                                        <span class="after">売約済み</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">7号地</span>
                                        <span class="after">売約済み</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">8号地</span>
                                        <span class="after">売約済み</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">9号地</span>
                                        <span class="after">243.01㎡	73.51坪	12.8万円</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">10号地</span>
                                        <span class="after">244.86㎡	74.07坪	12.8万円</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">11号地</span>
                                        <span class="after">売約済み</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">12号地</span>
                                        <span class="after">204.35㎡	61.81坪	12.8万円</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="map">
                            <div class="title_blue">地図</div>
                            <div class="bounce_map">
                                <img src="{{ asset("img/about-us/map.png" }}" alt="Map Detail">
                            </div>
                        </div>

                        <div class="shiryou_download">
                            <a class="btn_download" href="javacript:;" download>資料ダウンロードはこちら</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset("js/about-us/about-us.js") }}"></script>
    <script type="text/javascript">
        <!--Javascript here-->
    </script>
@endsection