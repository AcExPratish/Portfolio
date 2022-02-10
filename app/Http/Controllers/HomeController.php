<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function home(Request $request){
        $posts = Post::orderBy('created_at','DESC')->paginate(2);

        if($request->get('search')){
            $posts = Post::where('title','like','%' . request('search') . '%')
                ->orWhere('body','like','%' . request('search') . '%')
                -> paginate(2);

            return view('bootstrap.blog',[
                'posts' => $posts
            ]);
        }

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function index(){

        if (auth()->user()->permissions!='admin'){
            abort(403);
        }
        else{
            return view('/dashboard');
        }
    }
}
