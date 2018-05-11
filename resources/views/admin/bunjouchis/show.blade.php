@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/bunjouchis/bunjouchis.css') }}">
@endsection
@section('content')
    <section class="content-header">
        <h1>
            分譲地
        </h1>
    </section>
    <div class="content m_show">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.bunjouchis.show_fields')
                    <a href="{!! route('admin.bunjouchis.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
