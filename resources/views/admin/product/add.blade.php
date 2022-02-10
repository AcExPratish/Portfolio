@extends('layouts.admin')
@section('content')
    <form class="row my-5 my-lg-0" method="POST" action="{{url('/admin/add/addProduct')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control" id="user_id" name="user_id" value="{{auth()->user()->id}}" hidden>
        <input type="text" class="form-control" id="published_at" name="published_at" value="{{now()}}" hidden>
        <div class="form-group col-6">
            <label for="slug">Name</label>
            <input type="text" class="form-control" id="slug" name="slug" required>
        </div>
        <div class="form-group col-6">
            <label for="category">Select Category</label>
            <select class="form-control w-100" id="category" name="category_id" required>
                <option value="1">Game</option>
                <option value="2">CD</option>
                <option value="3">Music</option>
            </select>
        </div>
        <div class="form-group col-6">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group col-6">
            <label for="excerpt">Excerpt</label>
            <input type="text" class="form-control" id="excerpt" name="excerpt" required>
        </div>
        <div class="form-group col-6">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" required min="1" max="99">
        </div>
        <div class="form-group col-6">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required min="1" max="99">
        </div>
        <div class="form-group col-12">
            <label for="body" class="w-100">Product Description</label>
            <textarea name="body" id="body" class="w-100 form-control" cols="30" rows="10" required></textarea>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn-grad border-0">
                Submit
            </button>
        </div>
    </form>
@endsection
