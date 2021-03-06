@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/admin/bunjouchis/bunjouchis.css') }}">
@endsection
@section('content')
    <section class="content-header">
        <h1 class="pull-left">分譲地リスト</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.bunjouchis.create') !!}">新規登録</a>
        </h1>
    </section>
    <div class="content m_index">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.bunjouchis.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $bunjouchis])

        </div>
    </div>
@endsection

