<?php

namespace App\Http\Controllers;

use App\Entities\Blog;
use App\Entities\Estado;
use App\Entities\Cidade;
use Illuminate\Http\Request;
use App\Entities\BannerVideo;
use App\Entities\BannerRotativo;
use App\Entities\Empreendimento;
use Illuminate\Support\Facades\DB;
use App\Entities\BannerPromocional;
use App\Entities\BlogCategoria;
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
      $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
      $videos = BannerVideo::orderBy('created_at', 'desc')->take(3)->get();
      $estados = Estado::all();
      $empreendimentosDestaque = EmpreendimentoDestaque::all();
      $bannerRotativos = BannerRotativo::all();
      $bannerPromocionals = BannerPromocional::orderBy('created_at')->take(2)->get();
      return view('site.home.index', compact( 'videos','bannerRotativos', 'bannerPromocionals', 'estados', 'empreendimentosDestaque', 'blogs'));
    }

    public function ajaxCidades(Request $request ){

      $cidades = Cidade::where('estado_id', $request->estado_id)->select('id', 'nome')->get();

      return response()->json([
        'cidades' => $cidades->toArray()
      ]);

    }

    //EMPREENDIMENTOS
    public function empreendimentos(Request $request)
    {
      // if( $request->cidade_nome){
      //   $cidade = Cidade::where('nome', $request->cidade_nome)->get();
      // } else {
      //   $cidade = Cidade::all();
      // }

      $estados = Estado::all();
      $empreendimentos = Empreendimento::all();
      return view('site.empreendimentos.index', compact('empreendimentos', 'estados'));
    }

    public function empreendimentoShow($id) {
      $estados = Estado::all();
      $empreendimento = Empreendimento::find($id);
      return view('site.empreendimentos.show', compact('empreendimento', 'estados'));
    }

    //BLOGS
    public function blogs()
    {
      $estados = Estado::all();
      $blogs = Blog::all();
      return view('site.blogs.index', compact('blogs', 'estados'));
    }

    public function blogShow($id) {
      $estados = Estado::all();
      $blog = Blog::find($id);
      $categorias = BlogCategoria::orderBy('created_at', 'desc')->take(10)->get();
      $blogs = Blog::orderBy('created_at', 'desc')->take(7)->get();
      return view('site.blogs.show', compact('blog', 'blogs', 'categorias',  'estados'));
    }

    //CONTATO
    public function quemsomos() {
      $estados = Estado::all();
      return view('site.quemsomos.index', compact('estados'));
    }

    //CONTATO
    public function contato() {
      $estados = Estado::all();
      return view('site.contato.index', compact('estados'));
    }

}
