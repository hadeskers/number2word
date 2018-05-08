<?php

namespace Hadesker\Number2Word;

use Illuminate\Support\ServiceProvider;

class NumberToWordServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->make('Hadesker\Number2Word\Number2Word');
    }
}
