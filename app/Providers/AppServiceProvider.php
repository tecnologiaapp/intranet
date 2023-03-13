<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
      Paginator::useBootstrap();
      Carbon::setUTF8(true);
      Carbon::setLocale(config('app.locale'));
      setlocale(LC_ALL, 'es_MX', 'es', 'ES', 'es_MX.utf8');
   }
}
