<?php

namespace App\Providers;

use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    Vite::macro('image', fn (string $asset) => $this->asset("resources/img/{$asset}"));
    Vite::macro('script', fn (string $asset) => $this->asset("resourcecs/js/{$asset}"));
  }
}
