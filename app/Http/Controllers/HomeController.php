<?php

namespace App\Http\Controllers;

use App\Entities\Blog;
use Illuminate\Http\Request;
use App\Entities\BannerVideo;
use App\Entities\BannerRotativo;
use App\Entities\Empreendimento;
use App\Entities\BannerPromocional;
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
      $blogs = Blog::all();
      $videos = BannerVideo::all();
      $empreendimentosDestaque = EmpreendimentoDestaque::all();
      $bannerRotativos = BannerRotativo::all();
      $bannerPromocionals = BannerPromocional::all();
      return view('site.home.index', compact( 'videos','bannerRotativos', 'bannerPromocionals', 'empreendimentosDestaque', 'blogs'));
    }

    //EMPREENDIMENTOS

    public function empreendimentos()
    {
      $empreendimentos = Empreendimento::all();
      return view('site.empreendimentos.index', compact('empreendimentos'));
    }

    public function empreendimentoShow($id) {
      $empreendimento = Empreendimento::find($id);
      return view('site.empreendimentos.show', compact('empreendimento'));
    }

    //BLOGS
    public function blogs()
    {
      $blogs = Blog::all();
      return view('site.blogs.index', compact('blogs'));
    }

    public function blogShow($id) {
      $blog = Blog::find($id);
      return view('site.blogs.show', compact('blog'));
    }

    //CONTATO
    public function contato() {
      return view('site.contato.index');
    }

}
