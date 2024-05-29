@extends('layouts.datatablelayout')
@section('content')
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-server bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Cash Orders Table</h5>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Update Order Details</a>
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
                                        <th>Phone number</th>
                                        <th>Address</th>
                                        <th>Order Confirmed?</th>
                                        <th>Order Type</th>
                                        <th>Order Total</th>
                                        <td>Date Created</td>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cashers as $order)
                                    <tr>
                                     <td>{{$order->username}}</td>
                                     <td>{{$order->email}}</td>
                                     <td>{{$order->phone_number}}</td>
                                     <td>{{$order->address}}</td>
                                     <td>YES</td>
                                     <td>{{$order->transfer}}</td>
                                     <td>{{$order->total}}</td>
                                     <td>{{$order->created_at}}</td>
                                    </tr>
                                    @empty
                                    <p>No orders</p>
                                    @endforelse
                                   
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