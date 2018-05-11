@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bunjouchi
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
