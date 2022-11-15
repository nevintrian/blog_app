<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view(
            'home',
            [
                'title' => 'Home',
                'header' => 'All Posts',
                'posts' => Post::latest()->get()
            ]
        );
    }
}
