<?php

namespace App\Modules\Admin;

class AdminServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register()
    {
        \Log::debug("Admin registrado");

        // Registros que podem ser feitos a iniciar o provider
        $this->app->booting(function() {
            
        });
    }

}
