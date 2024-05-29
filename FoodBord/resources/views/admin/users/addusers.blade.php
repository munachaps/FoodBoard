@extends('layouts.inputformslayout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>User information</h5>

        </div>
        <div class="card-block">
            <form  method="POST" action="{{ route('admin.create-users') }}">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" />
                        <span class="messages"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Email input" />
                        <span class="messages"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">User ID-number </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nat_id" name="nat_id" placeholder="ID Input" />
                        <span class="messages"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">User Role</label>
                    <div class="col-sm-10">
                        <select name="role" id="role" class="form-control">
                            <option class="form-group" value="Manager">Manager</option>
                            <option class="form-group" value="Accountant">Accountant</option>
                            <option class="form-group" value="Sales">Sales</option>
                        </select>
                        <span class="messages"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="" />
                        <span class="messages"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary m-b-0" name="Submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
