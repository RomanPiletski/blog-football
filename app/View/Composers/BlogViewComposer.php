<?php

namespace App\View\Composers;

use App\Models\Category;
use App\Models\Post;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\View\View;

class BlogViewComposer
{
    public $weatherService;

    public function __construct(WeatherServiceContract $weather)
    {
        $this->weatherService = $weather;
    }

    public function compose(View $view)
    {
        $view->with("popularPosts", Post::getPopularPosts());
        $view->with("featuredPosts", Post::getFeaturedPosts());
        $view->with("recentPosts", Post::getRecentPosts());
        $view->with("categories", Category::all());
        $view->with("weather", $this->weatherService);
    }
}
