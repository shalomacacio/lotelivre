<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\BannerRotativo;

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
        return view('site.home.index', compact('bannerRotativos'));
    }

}
