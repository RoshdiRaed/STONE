<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // In DashboardController.php
    public function index()
    {
        $articles = Article::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('dashboard', ['articles' => $articles]);
    }
}
