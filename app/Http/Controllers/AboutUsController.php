<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs(Request $request){
        $posts = Post::orderBy('created_at','DESC')->paginate(2);

        if($request->get('search')){
            $posts = Post::where('title','like','%' . request('search') . '%')
                ->orWhere('body','like','%' . request('search') . '%')
                -> paginate(2);

            return view('bootstrap.blog',[
                'posts' => $posts
            ]);
        }

        return view('bootstrap.about-us',[
            'posts' => $posts
        ]);
    }
}
