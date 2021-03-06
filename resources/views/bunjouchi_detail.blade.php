@extends('layouts.frontend.app')

@section('title', '分譲地詳細')
@section('description', '分譲地詳細')
@section('keywords', '分譲地詳細')

@section('style')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY&language=ja&region=JP"></script>
    <link rel="stylesheet" href="{{ asset("css/about_us_detail/about_us_detail.css") }}" type="text/css" media="all"/>
    <style tyle="text/css">
        .main-content .naiyou_page .bunjochi_detail .detail_li .bound_detail .map .bounce_map {
            opacity: 1;
            width: 100%;
            height: 496px;
        }

        @media only screen and (max-width: 480px) {
            .naiyou_page .bound_ul .cell_li span.description_rui {
                width: 70%;
            }
        }
        .bound_ul .cell_li .gray_item.label_rui {
            background-color: #9FA0A0!important;
        }
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
                    @if($bunjouchi->status == 1)
                        <span class="label_rui gray_item">完売御礼</span>
                    @else
                        <span class="label_rui">分譲中</span>
                    @endif
                    <span class="description_rui">{{ $bunjouchi->title }}</span>
                </li>
            </ul>


            <div class="bunjochi_detail">
                <div class="detail_li">
                    <!--<div class="detail_li">-->
                    <div class="bound_detail">
                        <div class="kugazu">
                            <div class="title_blue">区画図</div>
                            <div class="img_kugazu">
                                @php
                                $ext = pathinfo($bunjouchi->map_url, PATHINFO_EXTENSION);
                                @endphp

                                @if($ext =="jpg" || $ext =="jpeg" || $ext =="png")
                                    <img src="{{ asset( "uploads/bunjouchis" . "/" . $bunjouchi->map_url) }}" alt="区画図">
                                @elseif($ext == "pdf")
                                    <div style="text-align: center;">
                                        <a style="font-size: 16px;font-weight: 600;" href="{{ asset( "uploads/bunjouchis" . "/" . $bunjouchi->map_url) }}"
                                           target="blank">PDF マップ</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="butsuken">
                            <div class="title_blue">物件概要</div>
                            <div class="bounce_butsuken">
                                <ul>
                                    <li class="cell_li_child">
                                        <span class="before">・住所</span>
                                        <span class="after">{{ $bunjouchi->address }}</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・土地面積</span>
                                        <span class="after">{{ $bunjouchi->land_area }}</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・地目</span>
                                        <span class="after">{{ $bunjouchi->ground }}</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・総区画</span>
                                        <span class="after">{{ $bunjouchi->total_parcel }}</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・建ぺい率</span>
                                        <span class="after">{{ $bunjouchi->construction_pay_rate }}</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・容積率</span>
                                        <span class="after">{{ $bunjouchi->floor_area_ratio }}</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・用途地域</span>
                                        <span class="after">{{ $bunjouchi->usage_area }}</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・排水</span>
                                        <span class="after">{{ $bunjouchi->drainage }}</span>
                                    </li>
                                    <li class="cell_li_child">
                                        <span class="before">・取引態様</span>
                                        <span class="after">{{ $bunjouchi->dealing_status }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="kakaku">
                            <div class="title_blue">価格</div>
                            <div class="bounce_kakaku">
                                <ul>
                                    @foreach($prices as $key_price => $price)
                                    <li class="cell_li_child">
                                        <span class="before">{{ $price->bangou }}号地</span>
                                        <span class="after">{{ $price->description }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="map">
                            <div class="title_blue">地図</div>
                            <div id="bounce_map" class="bounce_map">
                                {{--<img src="{{ asset("img/about-us/map.png") }}" alt="Map Detail">--}}
                            </div>
                        </div>

                        <div class="shiryou_download">
                            @if($bunjouchi->document_url)
                            <a class="btn_download" href="{{ asset("uploads/bunjouchis") . "/" . $bunjouchi->document_url }}" download>資料ダウンロードはこちら</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        var mapObject = {
            lng: {{ $bunjouchi->longitude }},
            lat: {{ $bunjouchi->latitude }},
            getId: 'bounce_map',
            setContent: "{{ $bunjouchi->address }}"
        };
    </script>
    <script type="text/javascript" src="{{ asset("js/about-us/about-us-detail.js") }}"></script>
@endsection