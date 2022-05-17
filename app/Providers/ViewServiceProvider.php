<?php

namespace App\Providers;

use App\View\Composers\BlogViewComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer(["pages._sidebar", "admin.*"], BlogViewComposer::class);
    }
}
