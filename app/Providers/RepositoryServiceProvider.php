<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ConexoRepository;
use App\Repositories\Interfaces\ConexoRepositoryInterface;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ConexoRepositoryInterface::class, ConexoRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
