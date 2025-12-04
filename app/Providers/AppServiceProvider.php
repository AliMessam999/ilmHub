<?php

namespace App\Providers;

use App\Models\CdMenu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
    public function boot()
    {
        Paginator::useBootstrapFive();

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