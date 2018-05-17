@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/bunjouchis/bunjouchis.css') }}">

@endsection


@section('content')
    <section class="content-header">
        <h1>
            分譲地登録
        </h1>
    </section>
    <div class="content m_create_edit m_create">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.bunjouchis.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', "id" => "formSubmit"]) !!}

                        @include('admin.bunjouchis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset("plugins/geolocator-master/dist/geolocator.js") }}"></script>
    {{--Config JQuey Validation--}}
    <script type="text/javascript" src="{{ asset("plugins/jquery_validator/jquery.validate.min.js") }}"></script>
    {{--<script type="text/javascript" src="{{ asset("plugins/jquery_validator/jquery.validate.file.js") }}"></script>--}}
    <script type="text/javascript" src="{{ asset("js/validationConfig.js") }}"></script>
    {{--End Validation--}}
    <script type="text/javascript" src="{{ asset('plugins/chained/jquery.chained.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/xml_json/xml2json.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-fileinput/js/fileinput.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-fileinput/js/locales/ja.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/bunjouchis/create_edit.js') }}"></script>

    <script type="text/javascript">

        //Config for Map URL
        $("#map_url").fileinput({
            language: "ja",
            allowedFileExtensions: ["jpg", "png", "pdf"],
        });

        //Config for Document URL
        $("#document_url").fileinput({
            language: "ja",
            allowedFileExtensions: ["pdf"]
        });

        $(function() {
          // jQuery goes here...

            initial();

            function initial() {
                $('.file').css('visibility', 'visible');


                $("#school_id").chained("#region_id");
                $("#station_id").chained("#route_id");
            }

        });
    </script>
@endsection
