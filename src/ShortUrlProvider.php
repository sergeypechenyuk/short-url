<?php

namespace Sergeypechenyuk\ShortUrl;

use Illuminate\Support\ServiceProvider;
use Sergeypechenyuk\ShortUrl\ShortUrl;

class ShortUrlProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/shorturl.php' => config_path('shorturl.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('shorturl', function() {
            return new ShortUrl();
        });
    }
}
