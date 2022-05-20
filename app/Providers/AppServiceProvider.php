<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Observers\Admin\UserObserver;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        Gate::define('admin_panel', function(User $user) {
            return $user->is_admin == 1;
        });
//        view()->composer("pages._sidebar", function($view){
//            $view->with("popularPosts", Post::getPopularPosts());
//            $view->with("featuredPosts", Post::getFeaturedPosts());
//            $view->with("recentPosts", Post::getRecentPosts());
//            $view->with("categories", Category::all());
//        });
        Paginator::useBootstrapFour();
    }
}
