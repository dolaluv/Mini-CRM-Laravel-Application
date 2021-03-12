@extends('layouts.admin')


@section('content')

    

 @include('includes.tinyeditor')
    <h1>Create  Company</h1>

     <div class="row">
         {!! Form::open(['method'=>'POST', 'action'=> 'CompanyController@store', 'files'=>true]) !!}

           <div class="form-group">
                 {!! Form::label('first_name', 'first name:') !!}
                 {!! Form::text('first_name', null, ['class'=>'form-control'])!!}
           </div>

             <div class="form-group">
                 {!! Form::label('email', 'Email:') !!}
                 {!! Form::text('email', null, ['class'=>'form-control'])!!}
           </div>

             <div class="form-group">
                 {!! Form::label('website', 'Website:') !!}
                 {!! Form::text('website', null, ['class'=>'form-control'])!!}
           </div>

          

            <div class="form-group">
                {!! Form::label('logo', 'Logo:') !!}
                {!! Form::file('logo', null,['class'=>'form-control'])!!}
             </div>




             <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
             </div>

           {!! Form::close() !!}

    </div>


<div class="row">


        @include('includes.form_error')



    </div>


@stop