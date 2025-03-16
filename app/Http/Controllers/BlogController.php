<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Import the Article model

class BlogController extends Controller
{
    public function index()
    {
        // Fetch articles with the associated user data
        $articles = Article::with('user')->get();
        return view('Blog.blog', compact('articles')); // Pass articles to your view
    }
}
