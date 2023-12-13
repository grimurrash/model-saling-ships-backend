<?php

namespace App\Providers;

use App\Helpers\FileHelper;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(FileHelper::getDirectories(__DIR__ . '/../../database/migrations'));
    }
}
