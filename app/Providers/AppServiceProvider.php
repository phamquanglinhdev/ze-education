<?php

namespace App\Providers;

use App\Models\Scopes\TeacherScope;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

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
    public function boot()
    {

        $settings = Setting::all();
        foreach ($settings as $setting) {
            $_SERVER[strtoupper($setting->key)] = $setting->value;
        }
        Builder::defaultStringLength(191);
    }
}
