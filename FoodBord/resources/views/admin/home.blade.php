@extends('layouts.adminlayout')
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Total <br> Staff</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">
                                                1
                                            </h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-database text-c-blue f-18"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Online <br> Orders</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">
                                                5
                                            </h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-database text-c-blue f-18"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">
                                               Cash <br> Orders
                                            </h6>
                                            <h3 class="m-b-0 f-w-700 text-white">
                                                6
                                            </h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-database text-c-blue f-18"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Total<br> Clients</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">
                                                7
                                            </h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-database text-c-blue f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card prod-p-card card-blue">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Total <br> Reviews</h6>
                                        <h3 class="m-b-0 f-w-700 text-white">
                                            4
                                        </h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-database text-c-blue f-18"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card prod-p-card card-blue">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Total <br> Branches</h6>
                                        <h3 class="m-b-0 f-w-700 text-white">
                                            7
                                        </h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-database text-c-blue f-18"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card prod-p-card card-blue">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">
                                            Raised <br> Queries
                                        </h6>
                                        <h3 class="m-b-0 f-w-700 text-white">
                                            3
                                        </h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-database text-c-blue f-18"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                  
                </div>

            </div>

            <div class="col-md-12 col-xl-12">
                <div class="card sale-card">
                    <div class="card-header">
                        <h5>Total Leads Revenue</h5>
                    </div>
                    <div class="card-block text-center">
                        <div id="tot-rev-chart" class="tot-rev-chart chart-shadow st-cir-chart"
                            style="width:100px;height:100px">
                            <h3>120</h3>
                        </div>
                        <h6 class="m-t-40">Today’s Lead Sales</h6>
                        <h3 class="f-w-700 m-b-40">100</h3>
                        <div class="row">
                            <div class="col-4">
                                <p class="m-b-5">Target</p>
                                <h3 class="f-w-700 text-c-yellow">$1253</h3>
                            </div>
                            <div class="col-4">
                                <p class="m-b-5">Last Month</p>
                                <h3 class="f-w-700 text-c-yellow">$795</h3>
                            </div>
                            <div class="col-4">
                                <p class="m-b-5">This Month</p>
                                <h3 class="f-w-700 text-c-yellow">$978</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Service Providers</h5>

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="autofill" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>CareProvider Name</th>
                                            <th>Registered Email</th>
                                            <th>Registered Website</th>
                                            <th>Registered Manager</th>
                                            <th>Manager Email</th>
                                            <th>Services Provided</th>
                                            <th>Is Approved</th>
                                            <th>Date Added</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                       <tr>
                                        <td></td>
                                       
                                       </tr>
                                    
                                    <p class="bg-danger text-white p-1">No service providers </p>
                                
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
    </div>
@endsection
