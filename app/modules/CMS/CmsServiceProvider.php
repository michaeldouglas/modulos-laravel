<?php

namespace App\Modules\Cms;

class CmsServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register()
    {
        \Log::debug("CMS registrado");

        // Registros que podem ser feitos a iniciar o provider
        $this->app->booting(function() {
            
        });
    }

}
