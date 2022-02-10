<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class PostController extends Controller
{

    public function blogDetails(Post $post){
        return view('bootstrap.blog-details', [
            'posts' => $post
        ]);
    }

    public function blog(Request $request){
        $posts = Post::orderBy('created_at','DESC')->paginate(6);

        if($request->get('search')){
            $posts = Post::where('title','like','%' . request('search') . '%')
                ->orWhere('body','like','%' . request('search') . '%')
                -> paginate(2);
        }

        return view('bootstrap.blog',[
            'posts' => $posts
        ]);
    }

}
