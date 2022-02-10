@extends('layouts.admin')
@section('content')
    <form class="row my-5 my-lg-0" method="POST" action="{{url('admin/edit/editUser/'.$posts->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$posts->name}}" required>
        </div>
        <div class="form-group col-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{$posts->username}}" required>
        </div>
        <div class="form-group col-9">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$posts->email}}" required>
        </div>
        <div class="form-group col-3">
            <label for="permissions">Select Permission</label>
            <select class="form-control w-100" id="permissions" name="permissions" required>
                <option value="{{$posts->permissions}}" selected disabled>{{ucfirst($posts->permissions)}}</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn-grad border-0">
                Submit
            </button>
        </div>
    </form>
@endsection
