<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){

        $posts = Post::orderBy('created_at','DESC')->paginate(2);

        if($request->get('search')){
            $posts = Post::where('title','like','%' . request('search') . '%')
                ->orWhere('body','like','%' . request('search') . '%')
                -> paginate(2);

            return view('bootstrap.blog',[
                'posts' => $posts
            ]);
        }

        return view('bootstrap.contact',[
            'posts' => $posts
        ]);
    }
}
