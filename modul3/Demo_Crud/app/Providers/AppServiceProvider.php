<?php

namespace App\Providers;

use App\Http\Repositories\categories\CategoryRepo;
use App\Http\Repositories\categories\RepoCategoryInterface;
use App\Http\Repositories\RepoUserInterface;
use App\Http\Repositories\UserRepository;
use App\Http\Services\category\CategoryService;
use App\Http\Services\category\ServiceCategoryInterface;
use App\Http\Services\ServiceUserInterface;
use App\Http\Services\UserService;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(ServiceUserInterface::class,UserService::class);
        $this->app->singleton(RepoUserInterface::class, UserRepository::class);

        $this->app->singleton(ServiceCategoryInterface::class,CategoryService::class);
        $this->app->singleton(RepoCategoryInterface::class, CategoryRepo::class);
    }
}
