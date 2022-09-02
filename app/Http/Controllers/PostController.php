<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate();

        return view('index', ['posts'=>$posts]);
    }
}
