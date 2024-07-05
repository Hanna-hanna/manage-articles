<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        Article::class => ArticlePolicy::class,
    ];

}
