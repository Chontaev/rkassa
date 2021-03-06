<?php

namespace Rkassa\Payment;

use Illuminate\Support\ServiceProvider;

class RkassaServiceProvider extends ServiceProvider{

    public function boot(){

     }
    
    public function register(){

        $this->app->singleton(Rkassa::class);
    }
}