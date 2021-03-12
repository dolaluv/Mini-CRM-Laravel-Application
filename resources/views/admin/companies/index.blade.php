@extends('layouts.admin')






@section('content')


    <h1>Companies</h1>


     <table class="table">
       <thead>
         <tr>
          <th>S/N</th>
          <th>Logo</th>

             <th>Company name</th>
              <th>Company Email</th>
              <th>Company Website</th>   
              

             <th>Update/Delete</th>
               <th>Created at</th>
        </thead>
        <tbody>

        @if($AllCompanies)


            @foreach($AllCompanies as $Company)

          <tr>
              <td>{{$Company->id}}</td>
               <td><img height="50" src="{{ asset('images/'.$Company->logo) }}" alt=""></td>

              
               <td>{{$Company->first_name}}</td>
               
              <td>{{$Company->email}}</td>
               <td>{{$Company->website}}</td>
              
          
              
              <td> <a href="{{route('admin.companies.edit', $Company->id)}}"> Update /Delete</a></td>
              <td>{{$Company->created_at->diffForhumans()}}</td>

          </tr>

            @endforeach

            @endif

       </tbody>
     </table>

 <div class="row">
        <div class="col-sm-6 col-sm-offset-5">

            {{$AllCompanies->render()}}

        </div>
    </div>

@stop