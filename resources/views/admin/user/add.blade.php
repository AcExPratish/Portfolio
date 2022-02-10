@extends('layouts.admin')
@section('content')
    <form class="row my-5 my-lg-0" method="POST" action="{{url('/admin/add/addUser')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control" id="id" name="id" value="{{rand(999,9999)}}" hidden>
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group col-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group col-12">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group col-6">
            <label for="permissions">Select Permission</label>
            <select class="form-control w-100" id="permissions" name="permissions" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="form-group col-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn-grad border-0">
                Submit
            </button>
        </div>
    </form>
@endsection
