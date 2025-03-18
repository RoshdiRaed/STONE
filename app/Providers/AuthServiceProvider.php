<?php

namespace App\Providers;
use App\Models\Article;
use Illuminate\Support\ServiceProvider;
use App\Policies\ArticlePolicy;

class AppServiceProvider extends ServiceProvider
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
        //
    }

    protected $policies = [
        Article::class => ArticlePolicy::class,
    ];
}
