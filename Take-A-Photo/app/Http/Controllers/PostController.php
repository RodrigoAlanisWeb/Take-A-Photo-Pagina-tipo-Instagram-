<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $data = Post::all();
        return view('principal',['data'=>$data]);
    }

    public function show(Post $post) {
        $user = $post->User;
        $image = $user->Image;
        return view('detail',['data'=>$post,'image'=>$image]);
    }
}
