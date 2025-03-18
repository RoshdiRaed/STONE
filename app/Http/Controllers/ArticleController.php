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
            // 'image' => $request->image ?? 'public/img/img.png',
        ]);

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    // Show a specific article
    public function show($id)
    {
        try {
            // Fetch the article by ID with its author
            $article = Article::with('user')->findOrFail($id);

            // Pass the article to the same blog view
            return view('Blog.blog', ['article' => $article]);
        } catch (\Exception $e) {
            return redirect()->route('blog')->with('error', 'Article not found');
        }
    }

    // Show form to edit an article
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        // Check if current user is the author
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('blog')->with('error', 'You are not authorized to edit this post.');
        }

        return view('posts.edit', ['article' => $article]);
    }

    // Update an article
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        // Check if current user is the author
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('blog')->with('error', 'You are not authorized to edit this post.');
        }

        $request->validate([
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'string|max:255'
        ]);

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image ?? $article->image,
            'category' => $request->category ?? $article->category,
        ]);

        return redirect()->route('articles.show', $article->id)->with('success', 'Post updated successfully!');
    }

    // Delete an article
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        // Check if current user is the author
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('blog')->with('error', 'You are not authorized to delete this post.');
        }

        $article->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully!');
    }
}
