@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            School
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($school, ['route' => ['admin.schools.update', $school->id], 'method' => 'patch']) !!}

                        @include('admin.schools.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection