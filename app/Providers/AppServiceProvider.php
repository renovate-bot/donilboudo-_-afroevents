<?php

namespace AfroEvents\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\View\Factory as ViewFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(ViewFactory $view)
    {
        $view->composer('partials.forms.category', 'AfroEvents\Http\Views\Composers\CategoryFormComposer');
        
        $view->composer('partials.forms.organizer', 'AfroEvents\Http\Views\Composers\CategoryFormComposer');
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
