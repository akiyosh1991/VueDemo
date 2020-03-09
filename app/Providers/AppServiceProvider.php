<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Event\DummyEventRepository;
use App\Repositories\Event\EventRepository;
use App\Repositories\Event\EventRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (\App::environment('testing')) {
            $this->app->bind(EventRepositoryInterface::class, DummyEventRepository::class);
        } else {
            $this->app->bind(EventRepositoryInterface::class, EventRepository::class);
        }
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
