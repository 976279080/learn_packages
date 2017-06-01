<?php

namespace Laravist\Hasher;

use Illuminate\Support\ServiceProvider;
use Laravist\Hasher\MD5hasher;

class MD5hasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash',function(){
            return new MD5hasher();
        });
    }
}
