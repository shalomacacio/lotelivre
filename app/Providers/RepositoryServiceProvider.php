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
        $this->app->bind(\App\Repositories\BlogRepository::class, \App\Repositories\BlogRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EstadoRepository::class, \App\Repositories\EstadoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CidadeRepository::class, \App\Repositories\CidadeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BannerVideoRepository::class, \App\Repositories\BannerVideoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BlogCategoriaRepository::class, \App\Repositories\BlogCategoriaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmailMarketingRepository::class, \App\Repositories\EmailMarketingRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BlogComentariosRepository::class, \App\Repositories\BlogComentariosRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmpreendimentoDepoimentoRepository::class, \App\Repositories\EmpreendimentoDepoimentoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmpreendimentoGaleriaRepository::class, \App\Repositories\EmpreendimentoGaleriaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\NoticiaRepository::class, \App\Repositories\NoticiaRepositoryEloquent::class);
        //:end-bindings:
    }
}
