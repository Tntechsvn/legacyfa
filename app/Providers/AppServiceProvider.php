<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use View;

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
        Blade::include('includes.input', 'input');
        View::composer(
            ['pages.*'], 
            'App\Http\ViewComposers\ViewShareComposer'
        );
        Blade::directive('hello', function ($expression) {
            return "<?php echo 'Hi '. {$expression} .','; ?>";
        });
    }

    
}
