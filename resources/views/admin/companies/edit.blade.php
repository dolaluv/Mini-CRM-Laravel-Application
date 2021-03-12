@extends('layouts.admin')

@section('content')

    @include('includes.tinyeditor')


<h1>News Post</h1>
    
    <div class="row">

        <div class="col-sm-3">

            <img src="{{ asset('images/'.$company->logo) }}" alt="" class="img-responsive">
             
            </div>

        <div class="col-sm-9">
   
        {!! Form::model($company, ['method'=>'PATCH', 'action'=> ['CompanyController@update', $company->id], 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('first_name', 'Company Name:') !!}
            {!! Form::text('first_name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Company Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'Company Phone:') !!}
            {!! Form::text('phone', null, ['class'=>'form-control'])!!}
        </div>

         <div class="form-group">
            {!! Form::label('website', 'Company Website:') !!}
            {!! Form::text('website', null, ['class'=>'form-control'])!!}
        </div>

      


        <div class="form-group">
            {!! Form::label('logo', 'Photo:') !!}
            {!! Form::file('logo', null,['class'=>'form-control'])!!}
        </div>


      

        <div class="form-group">
            {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=> ['CompanyController@destroy', $company->id]]) !!}

             <div class="form-group">
                 {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}
             </div>
        {!! Form::close() !!}


        </div>


    </div>


    <div class="row">

        @include('includes.form_error')

    </div>

@stop