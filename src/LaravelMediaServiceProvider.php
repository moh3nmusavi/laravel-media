<?php
namespace Moh3n\LaravelMedia;
use Illuminate\Support\ServiceProvider;
use Moh3n\LaravelMedia\Services\ImageService;

class LaravelMediaServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind('image-service', function (){
            return new ImageService;
        });
    }
}