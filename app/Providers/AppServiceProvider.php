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
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Question::observe(\App\Observers\QuestionObserver::class);
		\App\Models\Blank::observe(\App\Observers\BlankObserver::class);
		\App\Models\Choice::observe(\App\Observers\ChoiceObserver::class);

        //
        \Carbon\Carbon::setLocale('zh');
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
