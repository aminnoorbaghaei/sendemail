<?php

namespace aminnourbaghaei\sendemail\Providers;

use Illuminate\Support\ServiceProvider;
use aminnourbaghaei\sendemail\sendemail;

class SendemailServiceProvider extends ServiceProvider{
    
    
    
    public function boot()
    
    {

        $this->loadMigrationsFrom(__DIR__."/../database/migrations");
        $this->loadViewsFrom(__DIR__."/../views",'sendemail');

       

        
    }
    
    public  function register()
    {
        
        
        
    }
    
    
}