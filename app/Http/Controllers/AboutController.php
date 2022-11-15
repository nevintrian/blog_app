<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'About',
            'info' => 'Laravel Framework and Bootstrap Framework',
            'name' => 'Invinid',
            'email' => 'invinid@gmail.com',
            'image' => 'matsuri.png'
        ]);
    }
}
