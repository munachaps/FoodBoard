@extends('layouts.datatablelayout')
@section('content')
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-server bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Users Table</h5>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Add System User</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="card">
                        <div class="card-header">
                           
                        </div>
                        <div class="card-block">
                            <table id="res-config" class="table display">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>ID</th>
                                        <th>Role</th>
                                        <td>Date Created</td>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                     <td>{{$user->username}}</td>
                                     <td>{{$user->email}}</td>
                                     <td>{{$user->nat_id}}</td>
                                     <td>{{$user->role}}</td>
                                     <td>{{$user->created_at}}</td>
                                    </tr>
                                    @endforeach
                                   
                             </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection