<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    }

    public function show(User $user)
    {
        return view('posts', [
            'title' => $user->name,
            'header' => 'Post By Author : ' . $user->name,
            'posts' => $user->posts
        ]);
    }
}
