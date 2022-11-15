<?php

namespace App\Http\Controllers;

use App\Models\Category;
use PDO;

class CategoryController extends Controller
{

    public function index()
    {
        return view(
            'categories',
            [
                'title' => 'Categories',
                'categories' => Category::all()
            ]
        );
    }

    public function show(Category $category)
    {
        return view(
            'posts',
            [
                'title' => $category->name,
                'header' => 'Post By Category : ' . $category->name,
                'posts' => $category->posts,

            ]
        );
    }
}
