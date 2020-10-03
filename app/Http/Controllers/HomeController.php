<?php

namespace App\Http\Controllers;

use App\Entities\BannerPromocional;
use Illuminate\Http\Request;
use App\Entities\BannerRotativo;
use App\Entities\Empreendimento;
use App\Entities\EmpreendimentoDestaque;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $empreendimentosDestaque = EmpreendimentoDestaque::all();
        $bannerRotativos = BannerRotativo::all();
        $bannerPromocionals = BannerPromocional::all();


        return view('site.home.index', compact('bannerRotativos', 'bannerPromocionals', 'empreendimentosDestaque'));
    }

    public function empreendimentos()
    {
        $empreendimentos = Empreendimento::all();
        return view('site.empreendimentos.index', compact('empreendimentos'));
    }

    public function empreendimentoShow($id) {
      $empreendimento = Empreendimento::find($id);
      return view('site.empreendimentos.show', compact('empreendimento'));
    }

    public function contato() {
      return view('site.contato.index');
    }

}
