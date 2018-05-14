@extends("layouts.frontend.app")

@section('title', '分譲地を地図から探す')
@section('description', '分譲地を地図から探す')
@section('keywords', '分譲地を地図から探す')


@section('style')
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY&language=ja&region=JP"></script>--}}
    <link rel="stylesheet" href="{{ asset("css/search_chizu/search_chizu.css") }}" type="text/css" media="all"/>
    <style tyle="text/css">
    </style>
@endsection

@section('content')

    <div class="main-content">
        <div class="top_banner_gazou">
            @include("layouts.frontend.partial.component.cpn_header_banner_gazou")
        </div>

        <div class="naiyou_page container">
            <div class="bunjiro_kara">
                <div class="title">
                    @include("layouts.frontend.partial.component.cpn_title", ["title" => "分譲地を地図から探す"])
                    <div class="bunjiro_link">
                        <div><a class="link1" href="{{ route("chizuSearch") }}">地図から探す</a></div>
                        <div><a class="link2" href="{{ route("schoolSearch") }}">校区から探す</a></div>
                        <div><a class="link3" href="{{ route("ekiSearch") }}">路線から探す</a></div>
                    </div>
                </div>

                <div class="bound_green_title">
                    @include("layouts.frontend.partial.component.cpn_green_title", ["titleContent" => "サティヤ不動産分譲地(売土地) 地名一覧"])
                </div>

                <div class="bounce_navigation">
                    <div class="bounce_list">
                        <ul class="bounce_li">
                            @foreach($regions as $key_region => $region)
                            <li class="item_li"><a href="{{ route("chizuSearch", ["id" => $region->id]) }}">{{ $region->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bounce_result">
                    <div class="gmap_position">
                        @isset($currentRegion)
                        <img src="{{ asset("uploads/chizus") . '/' . $currentRegion->img }}" alt="Google Map Position">
                        @endisset
                    </div>

                    <div class="bounce_buirochi_kara">
                        @if(count($bunjouchis))
                        <ul class="bound_ul">
                            @foreach($bunjouchis as $key_bunjouchi => $bunjouchi)
                                @include("layouts.frontend.partial.component.loop_bunjochi")
                            @endforeach
                        </ul>
                        @else
                        <div style="text-align: center">
                            @include("layouts.frontend.partial.component.cpn_no_record")
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset("js/search_chizu/search_chizu.js") }}"></script>
    <script type="text/javascript">
        <!--Javascript here-->
    </script>
@endsection