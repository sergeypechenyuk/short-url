<?php

namespace Phpprogs\ShortUrl;

use Illuminate\Support\ServiceProvider;

class ShortUrlProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        dd(22);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
