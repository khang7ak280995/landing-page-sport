<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        $file = app_path('Helpers/helpers.php');
        if (file_exists($file)){
            require_once($file);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
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
