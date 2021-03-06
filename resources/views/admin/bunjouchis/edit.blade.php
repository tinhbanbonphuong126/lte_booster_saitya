@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/bunjouchis/bunjouchis.css') }}">
@endsection
@section('content')
    <section class="content-header">
        <h1>
            分譲地編集
        </h1>
   </section>
   <div class="content m_create_edit m_edit">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bunjouchi, ['route' => ['admin.bunjouchis.update', $bunjouchi->id], 'method' => 'patch', 'enctype' => 'multipart/form-data', 'id' => 'formSubmit']) !!}

                        @include('admin.bunjouchis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection


@section('scripts')
    <script type="text/javascript">
        var create_edit = 1;
    </script>
    <script type="text/javascript" src="{{ asset("plugins/geolocator-master/dist/geolocator.js") }}"></script>
    {{--Config JQuey Validation--}}
    <script type="text/javascript" src="{{ asset("plugins/jquery_validator/jquery.validate.min.js") }}"></script>
    {{--<script type="text/javascript" src="{{ asset("plugins/jquery_validator/jquery.validate.file.js") }}"></script>--}}
    <script type="text/javascript" src="{{ asset("js/validationConfig.js") }}"></script>

    <script type="text/javascript" src="{{ asset("plugins/inputmask/jquery.inputmask.bundle.js") }}"></script>

    <script type="text/javascript" src="{{ asset('plugins/chained/jquery.chained.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-fileinput/js/locales/ja.js') }}"></script>
    <script type="text/javascript" src="{{ asset("js/admin/bunjouchis/create_edit.js") }}"></script>

    <script type="text/javascript">
        var map_url = "{{ $bunjouchi->map_url }}";
        var document_url = "{{ $bunjouchi->document_url }}";

        $("#map_url").fileinput({
            language: "ja",
            allowedFileExtensions: ["jpg", "png", "pdf"],
            initialCaption: map_url
        });

        $("#document_url").fileinput({
            language: "ja",
            allowedFileExtensions: ["pdf"],
            initialCaption: document_url
        });


        $(function() {
          // jQuery goes here...
            $('.file').css('visibility', 'visible')

            $('button.fileinput-remove-button.fileinput-remove').css("display", "inline-block");


            $("#school_id").chained("#region_id");
            $("#station_id").chained("#route_id");

            @php
                if($bunjouchi->school_id) {
                    $school = $bunjouchi->school;
                    $region = $school->region;
                    @endphp
                        var school_id = {{ $school->id }};
                        var region_id = {{ $region->id }};

                        $("#region_id").val(region_id).trigger('change');
                        $("#school_id").val(school_id).trigger('change');
                    @php
                }
            @endphp

            @php
                if($bunjouchi->station_id) {
                    $station = $bunjouchi->station;
                    $route = $station->route;
                    @endphp
                        var station_id = {{ $station->id }};
                        var route_id = {{ $route->id }};

                        $("#route_id").val(route_id).trigger('change');
                        $("#station_id").val(station_id).trigger('change');
                    @php
                }
            @endphp


        });
    </script>
@endsection
