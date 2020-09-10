<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\EmpreendimentoRepository::class, \App\Repositories\EmpreendimentoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\LoteRepository::class, \App\Repositories\LoteRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BannerRotativoRepository::class, \App\Repositories\BannerRotativoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmpreendimentoImageRepository::class, \App\Repositories\EmpreendimentoImageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BannerPromocionalRepository::class, \App\Repositories\BannerPromocionalRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmpreendimentoItensRepository::class, \App\Repositories\EmpreendimentoItensRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmpreendimentoDestaqueRepository::class, \App\Repositories\EmpreendimentoDestaqueRepositoryEloquent::class);
        //:end-bindings:
    }
}
