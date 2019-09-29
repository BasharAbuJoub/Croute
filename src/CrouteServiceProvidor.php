<?php


namespace Bashar\Croute;

use Illuminate\Support\ServiceProvider;

class CrouteServiceProvidor extends ServiceProvider
{

    public function boot(){

        $this->reigsterHelpers();

    }

    public function register(){

    }


    public function registerHelper(){
        if (file_exists($file = app_path('./Http/SetActive.php')))
        {
            require $file;
        }
    }

}
