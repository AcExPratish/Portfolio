<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Models\User;
use App\Services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    //Product

    public function showProduct(){
        $posts = Post::orderBy('id','ASC')->paginate(10);
        return view('admin.product.show',[
            'posts' => $posts
        ]);
    }

    public function addproductForm(){
        return view('admin.product.add');
    }

    public function addProduct(Request $request){
        Post::create($request->all());
        return redirect('dashboard')->with('success','Product successfully added!');
    }

    public function editproductForm(Request $request, $id){
        $posts = Post::findOrFail($id);
        return view('admin.product.edit',[
            'posts' => $posts
        ]);
    }

    public function editProduct(Request $request, $id){
        Post::findOrFail($id)->update($request->all());
        return redirect('dashboard')->with('success','Product successfully updated!');
    }

    public function deleteProduct(Request $request, $id){
        Post::findOrFail($id)->delete($request->all());
        return redirect('dashboard')->with('success','Product successfully deleted!');
    }

    //User

    public function showUser(){
        $posts = User::orderBy('id','ASC')->paginate(10);
        return view('admin.user.show',[
            'posts' => $posts
        ]);
    }

    public function adduserForm(){
        return view('admin.user.add');
    }

    public function addUser(Request $request){
        User::create($request->all());
        return redirect('dashboard')->with('success','User successfully created!');
    }

    public function edituserForm(Request $request, $id){
        $posts = User::findOrFail($id);
        return view('admin.user.edit',[
            'posts' => $posts
        ]);
    }

    public function editUser(Request $request, $id){
        User::findOrFail($id)->update($request->all());
        return redirect('dashboard')->with('success','User successfully updated!');
    }

    public function deleteUser(Request $request, $id){
        User::findOrFail($id)->delete($request->all());
        return redirect('dashboard')->with('success','User successfully removed!');
    }

    //API

    public function newsletter(Newsletter $newsletter){
        request()->validate([
            'email' => 'required|email'
        ]);

        try {
            $newsletter->subscribe(request('email'));
        }
        catch (Exception $e){
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.'
            ]);
        }

        return redirect('/')->
        with('success','Newsletter subscribed!');
    }

}
