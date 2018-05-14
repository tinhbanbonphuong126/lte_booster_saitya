@extends("layouts.frontend.app")

@section('title', '分譲地を路線から探す')
@section('description', '分譲地を路線から探す')
@section('keywords', '分譲地を路線から探す')


@section('style')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY&language=ja&region=JP"></script>
    <link rel="stylesheet" href="{{ asset("css/search_eki/search_eki.css") }}" type="text/css" media="all"/>
    <style tyle="text/css">
    </style>
@endsection

@section('content')

    <div class="main-content">
        <div class="top_banner_gazou">
            @include('layouts.frontend.partial.component.cpn_header_banner_gazou')
        </div>

        <div class="naiyou_page container">
            <div class="eki_kara">
                <div class="title">

                    @include('layouts.frontend.partial.component.cpn_title', ["title" => "分譲地を路線から探す"])
                    <div class="bunjiro_link">
                        <div><a class="link1" href="{{ route("chizuSearch") }}">地図から探す</a></div>
                        <div><a class="link2" href="{{ route("schoolSearch") }}">校区から探す</a></div>
                        <div><a class="link3" href="{{ route("ekiSearch") }}">路線から探す</a></div>
                    </div>

                </div>

                <div class="bound_green_title">
                    @include("layouts.frontend.partial.component.cpn_green_title", ["titleContent" => "サティヤ不動産分譲地(売土地) 駅名一覧"])
                </div>

                <div class="bounce_navigation">
                    <div class="bounce_list bounce_list_1">
                        <div class="col col_1">
                            <div class="row_cell">
                                <div class="full header_tit"><a href="javascript:;">予讃線</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 1]) }}">高松</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 8]) }}">丸亀</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 2]) }}">香西</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 9]) }}">多度津</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 3]) }}">鬼無</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 10]) }}">詫間</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 4]) }}">端岡</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 11]) }}">高瀬</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 5]) }}">国分</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 12]) }}">観音寺</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 6]) }}">坂出</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 13]) }}">豊浜</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 7]) }}">宇多津</a></div>
                            </div>
                        </div>

                        <div class="col col_2">
                            <div class="row_cell">
                                <div class="full header_tit"><a href="javascript:;">土讃線</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 14]) }}">善通寺</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 15]) }}">琴平 </a></div>
                            </div>
                        </div>
                        <div class="col col_3">
                            <div class="row_cell">
                                <div class="full header_tit"><a href="javascript:;">高徳線</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 16]) }}">栗林</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 22]) }}">三本松</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 17]) }}">木太町</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 23]) }}">讃岐白鳥</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 18]) }}">屋島</a></div>
                                <div class="half"><a href="{{ route("ekiSearch", ["id" => 24]) }}">引田</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 19]) }}">讃岐牟礼</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 20]) }}">志度</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 21]) }}">オレンジタウン</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="bounce_list bounce_list_2">
                        <div class="col col_4">
                            <div class="row_cell">
                                <div class="full header_tit"><a href="javascript:;">琴電（琴平線）</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 25]) }}">瓦町</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 26]) }}">仏生山</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 27]) }}">円座</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 28]) }}">岡本</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 29]) }}">陶</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 30]) }}">滝宮</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 31]) }}">岡田</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 32]) }}">琴電琴平</a></div>
                            </div>
                        </div>
                        <div class="col col_5">
                            <div class="row_cell">
                                <div class="full header_tit"><a href="javascript:;">琴電（長尾線）</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 33]) }}">元山</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 34]) }}">高田</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 35]) }}">長尾</a></div>
                            </div>
                        </div>
                        <div class="col col_6">
                            <div class="row_cell">
                                <div class="full header_tit"><a href="javascript:;">琴電（志度線）</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 36]) }}">琴電屋島</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 37]) }}">八栗</a></div>
                            </div>
                            <div class="row_cell">
                                <div class="full"><a href="{{ route("ekiSearch", ["id" => 38]) }}">琴電志度</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="route_map">
                    <a data-fancybox="gallery" href="{{ asset("img/search_eki/gallery_route_map.png") }}">
                        <img src="{{ asset("img/search_eki/route_map.png") }}" alt="Route Map">
                    </a>
                    <p class="img_des">香川の鉄道路線マップ</p>
                </div>

                <div class="bounce_result">
                    <div class="bounce_buirochi_kara">
                        <div class="list">
                            分譲中の分譲地一覧
                        </div>
                        <ul class="bound_ul">
                            @foreach($bunjouchis as $index_bunjouchi => $bunjouchi)
                                @include("layouts.frontend.partial.component.loop_bunjochi")
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset("js/search_eki/search_eki.js") }}"></script>
    <script type="text/javascript">
        <!--Javascript here-->
    </script>
@endsection