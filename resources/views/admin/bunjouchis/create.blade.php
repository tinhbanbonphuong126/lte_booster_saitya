@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            分譲地登録
        </h1>
    </section>
    <div class="content m_create">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.bunjouchis.store']) !!}

                        @include('admin.bunjouchis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/chained/jquery.chained.js') }}"></script>
    <script type="text/javascript">
        $(function() {
          // jQuery goes here...

            $("#school_id").chained("#region_id");
            $("#station_id").chained("#route_id");
        });
    </script>
@endsection
