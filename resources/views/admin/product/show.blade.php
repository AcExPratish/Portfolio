@extends('layouts.admin')
@section('content')
    <div class="row">
        @if(count($posts))
            <table class="table table-hover table-responsive-md w-100 my-5 my-lg-0">
                <thead>
                <tr>
                    <th scope="col">I.D</th>
                    <th scope="col">Category</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->category->name}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->price}}</td>
                            <td>{{$post->quantity}}</td>
                            <td><a href="{{url('admin/edit/productForm/'.$post->id)}}" class="greenHover btn">Edit</a><br>
                                <form action="/admin/delete/product/{{$post->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="greenHover btn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <div class="mx-auto mt-5 mb-lg-5 my-lg-0">
                        {{$posts->links('vendor.pagination.bootstrap-4')}}
                    </div>
        @else
            <div class="row mx-auto alert alert-info text-center">
                No Record's Found
                <br>
                Or
                <br>
                Please select an option before proceeding forward
            </div>
        @endif
            </tbody>
        </table>
    </div>
@endsection
