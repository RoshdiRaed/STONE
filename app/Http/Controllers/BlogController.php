<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Import the Article model

class BlogController extends Controller
{
    public function index()
    {
        // Get all articles ordered by creation date (newest first)
        $articles = Article::with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('Blog.blog', ['articles' => $articles]);
    }

}
