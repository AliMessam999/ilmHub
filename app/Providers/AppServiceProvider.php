<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CdMenu;

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
        View::composer('*', function ($view) {
            $menus = CdMenu::with([
                'categories' => function ($query) {
                    $query->whereNull('parent')
                          ->with(['sub_categories' => function ($subQuery) {
                              $subQuery->with(['sub_categories']);
                          }]);
                }
            ])->orderBy('order', 'asc')->get();

            $view->with(compact('menus'));
        });
    }
}