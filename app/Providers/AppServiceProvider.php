<?php

namespace App\Providers;

use App\Models\Role;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
        Paginator::useBootstrap();

        Blade::if('isAdmin',function (){
            foreach (\Auth::user()->roles as $role){
                return $role->name === 'admin';
            }
        });

        View::composer(
            [
                'user.edit',
                'user.index'
            ],
            fn(\Illuminate\View\View $view)=> $view->with('roles',Role::latest('id')->get())
        );

    }
}
