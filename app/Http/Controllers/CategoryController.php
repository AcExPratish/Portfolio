<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function categoryFilter(Category $category, Request $request){

        if($request->get('search')){
            $posts = Post::where('title','like','%' . request('search') . '%')
                ->orWhere('body','like','%' . request('search') . '%')->paginate(6);

            return view('bootstrap.category-search',[
                'posts' => $posts
            ]);
        }

        return view('bootstrap.category-search', [
            'posts' => Post::where(['category_id'=>$category->id])->orderBy('id','DESC')->paginate(6)
        ]);
    }

    public function category(Request $request){

        $posts = Category::orderBy('id','DESC')->paginate(6);

        if($request->get('search')){
            $posts = Category::where('name','like','%' . request('search') . '%')
                ->orWhere('slug','like','%' . request('search') . '%')->paginate(6);

            return view('bootstrap.category',[
                'posts' => $posts
            ]);
        }

        return view('bootstrap.category',[
            'posts' => $posts
        ]);
    }
}
