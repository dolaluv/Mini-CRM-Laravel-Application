@extends('layouts.admin')


@section('content')

    

 @include('includes.tinyeditor')
    <h1>Create Employee</h1>

     <div class="row">
         {!! Form::open(['method'=>'POST', 'action'=> 'EmployeesController@store', 'files'=>true]) !!}

           <div class="form-group">
                 {!! Form::label('first_name', 'First Name:') !!}
                 {!! Form::text('first_name', null, ['class'=>'form-control'])!!}
           </div>

             <div class="form-group">
                 {!! Form::label('last_name', 'Last Name:') !!}
                 {!! Form::text('last_name', null, ['class'=>'form-control'])!!}
           </div>

              <div class="form-group">
                 {!! Form::label('phone', 'Phone:') !!}
                 {!! Form::text('phone', null, ['class'=>'form-control'])!!}
           </div>


             <div class="form-group">
                 {!! Form::label('email', 'Email:') !!}
                 {!! Form::text('email', null, ['class'=>'form-control'])!!}
           </div>

            
                            <div class="form-group">
                            <select class="" name="company_id">
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}"> {{$company->first_name}}</option>
                                @endforeach
                            </select>
                            
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