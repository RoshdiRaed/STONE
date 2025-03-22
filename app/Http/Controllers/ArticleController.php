<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',  // Validate the image
        ]);

        // Handle image upload if provided
        $imagePath = 'public/img/img.png';  // Default image path

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');  // Store the image in storage/articles
        }


        Article::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category ?? 'default_category',
            'image' => $imagePath,  // Save the path to the image in the database
        ]);

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }



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


    public function edit($id)
    {
        $article = Article::findOrFail($id);

        // Check if current user is the author
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('blog')->with('error', 'You are not authorized to edit this post.');
        }

        return view('posts.edit', ['article' => $article]);
    }


    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        // Check if current user is the author
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('blog')->with('error', 'You are not authorized to edit this post.');
        }

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'string|max:255'
        ]);

        // Handle image upload if provided
        $imagePath = $article->image;  // Keep the current image by default

        if ($request->hasFile('image')) {
            // Delete the old image from storage if it exists
            if ($article->image && file_exists(storage_path('app/public/' . $article->image))) {
                unlink(storage_path('app/public/' . $article->image));
            }

            // Store the new image
            $imagePath = $request->file('image')->store('articles', 'public');
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,  // Save the updated image path in the database
            'category' => $request->category ?? $article->category,
        ]);

        return redirect()->route('articles.show', $article->id)->with('success', 'Post updated successfully!');
    }

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
