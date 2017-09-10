@extends('layouts.app')
<title>Admin</title>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">แอดมินตอบปัญหา</div>

                <div class="panel-body">

                <table class="table">
              {{--  <thead>
                    <tr>
                        <th>name</th>
                       <th>email</th>
                       <th>position</th>
                       <th>tel</th>
                       <th>action</th>
                    </tr>
                </thead>
                    <tbody>
                    @foreach($all_users as $user)
                    @if($user->position=='admin')
                            <tr class="danger">
                    @else
                    <tr>
                    @endif

                           <td>{{$user->name}}</td>
                            <td> {{$user->email}}</td>
                            <td> {{$user->position}}</td>
                              <td> {{$user->tel}}</td>

                             <td><a href="/edit" class="btn btn-info btn-sm">Edit</a></td>
                              <td><a href="/delete/{{$user->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Please confirm again !!!') ">Delete</a></td>
                            </tr>
                            @endforeach
                    </tbody>--}}<table class="table table-striped">
                         <thead>
                           <tr>
                             <th>Title</th>
                             <th>Action</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($da as $d )
                             <tr>
                               <td>  {{$value = str_limit($d->topic, 80)}}</td>

                               <td>

                                 <a href="{{url('readSummer',array($d->id))}}">View&Answer</a> | {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}
                                <a href="{{url('deleteSummer',array($d->id))}}" onclick="return confirm('Please confirm again !!!')" >Delete</a> |
                                 <a href="{{url('editSummer',array($d->id))}}">Edit</a>

                               </td>
                             </tr>
                           @endforeach
                         </tbody>

                    </table>
      <hr>  <hr>  <hr>    <hr>  <hr>  <hr>    <hr>  <hr>  <hr>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
