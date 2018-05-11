@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Price
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($price, ['route' => ['admin.prices.update', $price->id], 'method' => 'patch']) !!}

                        @include('admin.prices.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection