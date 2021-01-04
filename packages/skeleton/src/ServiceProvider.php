<?php

namespace SoftArch\PrProject\Skeleton;

use Illuminate\Support\ServiceProvider as LaravelProvider;
use Illuminate\Support\Facades\View;

class ServiceProvider extends LaravelProvider
{
    protected $rootPath;


    public function register()
    {
        $this->rootPath = realpath(__DIR__ . "/../");
    }

    public function boot()
    {
        $this->loadMigrationsFrom($this->rootPath . "/database/migrations");
        $this->loadViewsFrom($this->rootPath . "/resources/views", "skeleton");
        $this->loadRoutesFrom($this->rootPath . "/routes/web.php");
        $this->publishAssets();
    }

    public function publishAssets()
    {
        $this->publishes([
            $this->rootPath . "/resources/assets" => public_path("packages/skeleton")
        ], "public");
    }
}
