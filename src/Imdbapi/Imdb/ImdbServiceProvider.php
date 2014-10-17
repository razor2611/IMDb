<?php namespace Imdbapi\Imdb;

use Illuminate\Support\ServiceProvider;

class ImdbServiceProvider extends ServiceProvider {
    
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('imdbapi/imdb');
    }    

    public function register()
    {
        $this->app['imdb'] = $this->app->share(function($app)
        {
            return new \Imdbapi\Imdb\Imdb;
        });
    }
    
    public function provides()
    {
        return array('imdb');
    }
    
    
}