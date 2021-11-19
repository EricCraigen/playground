<?php

namespace Pacificnorthwares\LaravelToastMe;

use Illuminate\Support\ServiceProvider;
use Pacificnorthwares\Toastme\Toastme;

class LaravelToastMeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // dd('It works!');
    }

    public function register()
    {
        $this->app->singleton(Toastme::class, function(){
            return new Toastme();
        });
    }
}
