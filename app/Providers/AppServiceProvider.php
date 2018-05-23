<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //カラムの値を増やす処理
        //デフォルトだと大きなデータが入りすぎでダメ
        //今まで3byteで処理できていたものが4byteになったことから処理できなくなっている。
        \Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
