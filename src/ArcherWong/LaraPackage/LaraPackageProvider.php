<?php

namespace ArcherWong\LaraPackage;

use Illuminate\Support\ServiceProvider;

class LaraPackageProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //注册扩展包视图，并起个名字，方便我们调用该文件夹下的视图
        $this->loadViewsFrom(__DIR__.'/../../views','LaraPackageView');
        //注册扩展包路由，使用php artisan route:list 命令可以查看是否生效
        $this->loadRoutesFrom(__DIR__.'/../../routes.php');
        //可以将相应的资源(不仅限于views文件夹)发布到laravel项目的某个位置，下面将views文件夹放到了我们常用的视图文件夹下
        $this->publishes([
            __DIR__.'/../../views'=>base_path('resources/views/vendor/lara-package'),
        ]);
        $this->publishes([
            __DIR__.'/../../index'=>base_path('resources/views/index'),
        ]);
        $this->publishes([
            __DIR__.'/../../assets'=>base_path('resources/assets'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //这里使用到了facades中的字符串
        $this->app->singleton('larapackage',function(){
            return $this->app->make('ArcherWong\LaraPackage\MoreAction');
        });
    }
}
