<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\BannerRotativo;
use App\Entities\Empreendimento;

class HomeController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $bannerRotativos = BannerRotativo::all();
        $videos = Empreendimento::where('url_video_destaque', 1)->get();
        return view('site.home.index', compact('bannerRotativos', 'videos'));
    }


    public function empreendimentos()
    {
        $empreendimentos = Empreendimento::all();
        return view('site.empreendimentos.index', compact('empreendimentos'));
    }

}
