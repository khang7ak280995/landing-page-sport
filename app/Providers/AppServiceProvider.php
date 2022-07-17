<?php

namespace App\Providers;

use App\Models\Settings\ConfigModel;
use Illuminate\Support\Facades\View;
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
        //
        $query = ConfigModel::query()->where('status', 0);
        $config = $query->whereIn('type', ['config'])->get();
        $arrayConfig = [];
        foreach ($config as $value) {
            $arrayConfig[$value->title] = $value->content;
        }
        View::share(['contact' => $arrayConfig]);
    }
}
