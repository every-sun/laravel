<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
class PostController extends Controller
{
    public function indexPosts() : Response{
        return Inertia::render('App', [
            'data' => Post::paginate(1) // TODO 페이지네이션
        ]);
    }

    public function storePost(Request $request){
        Post::create([
            'title'=> $request->input('title'),
            'writer'=>$request->input('writer'),
            'content'=> $request->input('content'),
        ]);
        return to_route('posts.index');
    }

    public function showPost(Request $request) : Response{
        return Inertia::render('Post/Show/Index', [
            'post'=>Post::find($request->route('id'))
        ]);
    }
}
