<?php

namespace App\Application\Providers;;

use App\Domain\User\Entities\User;
use Illuminate\Support\ServiceProvider;
use App\Domain\Users\Contracts\UserRepository;
use App\Domain\Users\Repositories\EloquentUserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRepository::class, function () {
            return new EloquentUserRepository(new User());
        });
    }
}