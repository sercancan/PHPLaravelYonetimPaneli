<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;


class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component("bsText","components.form.text",["isim","name","value"=>null,"attributes"=>[] ]);
        Form::component("bsPassword","components.form.password",["isim","name","value"=>null,"attribute"=>[] ]);
        Form::component("bsDosya","components.form.file",["isim","name","value"=>null,"attribute"=>[] ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
