<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Job\Domain\Repository\JobRepository;

class AppServiceProvider extends ServiceProvider
{
    public array $singletons = [
        JobRepository::class => \Job\Infrastructure\Repository\JobRepository::class,
    ];

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
        //
    }
}
