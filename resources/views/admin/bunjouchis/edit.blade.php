@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bunjouchi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bunjouchi, ['route' => ['admin.bunjouchis.update', $bunjouchi->id], 'method' => 'patch']) !!}

                        @include('admin.bunjouchis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection