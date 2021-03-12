@extends('layouts.admin')






@section('content')


    <h1>Employees</h1>


     <table class="table">
       <thead>
         <tr>
          <th>S/N</th>
          <th>First Name</th>

             <th> Last Name</th>
              <th> Email</th>
              <th>Phone</th>   
               <th>Company</th>   
          
             <th>Update/Delete</th>
               <th>Created at</th>
        </thead>
        <tbody>

        @if($employees)


            @foreach($employees as $employee)

          <tr>
              <td>{{$employee->id}}</td>
             

              
               <td>{{$employee->first_name}}</td>
                  <td>{{$employee->last_name}}</td>
              <td>{{$employee->email}}</td>
               <td>{{$employee->phone}}</td>
               <td>{{$employee->company ? $employee->company->first_name : 'none'}}</td>
                
               
          
              
              <td> <a href="{{route('admin.employee.edit', $employee->id)}}"> Update /Delete</a></td>
              <td>{{$employee->created_at->diffForhumans()}}</td>

          </tr>

            @endforeach

            @endif

       </tbody>
     </table>

 <div class="row">
        <div class="col-sm-6 col-sm-offset-5">

            {{$employees->render()}}

        </div>
    </div>

@stop