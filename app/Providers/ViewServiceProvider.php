<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share the $articles variable with the navigation view
        View::composer('layouts.navigation', function ($view) {
            if (Auth::check()) {
                $articles = Article::where('user_id', Auth::id())->get();
                $view->with('articles', $articles);
            } else {
                $view->with('articles', collect()); // Empty collection if user is not authenticated
            }
        });
    }
}
