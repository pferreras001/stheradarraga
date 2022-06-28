<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarta;
use SEO;

class PagesController extends Controller
{
  
  public function home(){

    $tartas = Tarta::all();
    return view('home', compact('tartas'));

  }

  public function tarta($id){

    $tarta = Tarta::findOrFail($id);   
    return view('tarta', compact('tarta'));

  }

  public function contacto(){

    return view('contacto');

  }

  public function servicios(){

    return view('servicios');

  }

}
