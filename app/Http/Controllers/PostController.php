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
            'data' => Post::paginate(10)
        ]);
    }
    public function showPost(Request $request) : Response{
        return Inertia::render('Post/Show/Index', [
            'data'=>Post::find($request->route('id'))
        ]);
    }
    public function createPost(){
        return Inertia::render('Post/Create/Index');
    }
    public function storePost(Request $request){
        Post::create([
            'title'=> $request->input('title'),
            'writer'=>$request->input('writer'),
            'content'=> $request->input('content'),
        ]);
        return to_route('posts.index');
    }
    public function editPost(Request $request) : Response{
        return Inertia::render('Post/Create/Index', [
            'data'=>Post::find($request->route('id'))
        ]);
    }
    public function updatePost(Request $request) {
        Post::find($request->route('id'))->update([
            'title'=> $request->input('title'),
            'writer'=>$request->input('writer'),
            'content'=> $request->input('content'),
        ]);
        return to_route('post.show', ['id'=>$request->route('id')]);
    }
    public function destroyPost(Request $request) {
        Post::find($request->route('id'))->delete();
        return to_route('posts.index');
    }
}
