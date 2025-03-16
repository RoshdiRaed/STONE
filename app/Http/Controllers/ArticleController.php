<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Show the form to create a new article
    public function create()
    {
        return view('posts.create');
    }

    // Store a new article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Article::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category ?? 'default_category',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    // Show a specific article
    public function show($id)
    {
        // Fetch the article by ID
        $article = Article::findOrFail($id);

        // Pass the article to the view
        return view('Blog.blog', ['article' => $article]);
    }
}
