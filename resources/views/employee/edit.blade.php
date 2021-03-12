@extends('layouts.admin')

@section('content')

    @include('includes.tinyeditor')


<h1>Edit Employee</h1>
    
    <div class="row">

        <div class="col-sm-3">

            <img src="{{ asset('images/'.$company->logo) }}" alt="" class="img-responsive">
             
            </div>

        <div class="col-sm-9">
   
        {!! Form::model($employee, ['method'=>'PATCH', 'action'=> ['EmployeesController@update', $employee], 'files'=>true]) !!}

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
            {!! Form::label('phone', 'Company Phone:') !!}
            {!! Form::text('phone', null, ['class'=>'form-control'])!!}
        </div>

        

            

                            <div class="form-group">
                                <select class="form-control" name="company_id">
                                    @foreach($companies as $company)
                                        @if($company->id == $employee->company_id)
                                            <option selected value="{{$company->id}}"> {{$company->first_name}} </option>
                                        @else
                                            <option value="{{$company->id}}"> {{$company->first_name}} </option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('company_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                       

      

        <div class="form-group">
            {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=> ['EmployeesController@destroy', $employee->id]]) !!}

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