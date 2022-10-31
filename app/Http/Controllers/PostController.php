<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $posts) {
        return view('index', [
            'posts' => $posts::get()
        ]);
    }

    public function detail(Post $post) {
        return view('detail', [
            'post' => $post
        ]);
    }
}
