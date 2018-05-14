@extends("layouts.frontend.app")

@section('title', '分譲地を校区から探す')
@section('description', '分譲地を校区から探す')
@section('keywords', '分譲地を校区から探す')


@section('style')
    <link rel="stylesheet" href="{{ asset("css/search/search.css")  }}" type="text/css" media="all"/>
    <style tyle="text/css">
    </style>
@endsection


@section('content')

    <div class="main-content">
        <div class="top_banner_gazou">
            @include("layouts.frontend.partial.component.cpn_header_banner_gazou")
        </div>

        <div class="naiyou_page container">
            <div class="bunjirokara">
                <div class="title">
                    @include("layouts.frontend.partial.component.cpn_title", ["title" => "分譲地を校区から探す"])
                </div>
                <div class="bunjiro_link">
                    <div><a class="link1" href="{{ route("chizuSearch") }}">地図から探す</a></div>
                    <div><a class="link2" href="{{ route("schoolSearch") }}">校区から探す</a></div>
                    <div><a class="link3" href="{{ route("ekiSearch") }}">路線から探す</a></div>
                </div>

                <div class="bound_green_title">
                    @include("layouts.frontend.partial.component.cpn_green_title", ["titleContent" => "サティヤ不動産分譲地(売土地) 中学校区一覧"])
                </div>

                <div class="bounce_navigation">
                    <div class="row">
                        @foreach($regions->chunk(7) as $chunk)
                        <div class="col-xs-6 col-md-6 device_union">
                            <div class="navigation">
                                <ul>
                                    @foreach($chunk as $index_region => $region)
                                    <li class="has-sub"><a href="javascript:;">{{ $region->name }}</a>
                                        <ul>
                                            <li><a href="javascript:;">{{ $region->name }}立</a></li>
                                            @foreach($region->school as $key_school => $school)
                                            <li><a href="{{ route("schoolSearch", ["id" => $school->id]) }}">{{ $school->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bounce_buirochi">
                    @if(count($bunjouchis))
                    <ul class="bound_ul">
                        @foreach($bunjouchis as $key_bunjouchis => $bunjouchi)
                            @include("layouts.frontend.partial.component.loop_bunjochi")
                        @endforeach
                    </ul>

                    @else
                        @include("layouts.frontend.partial.component.cpn_no_record")
                    @endif
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset("js/search/search.js") }}"></script>
    <script type="text/javascript">
        <!--Javascript here-->
    </script>
@endsection