<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index () {

        $message = Session::get('message');
        $typeMessage = Session::get('typeMessage');
        Session::put('typeMessage', '');
        Session::put('message', '');

        $categorias = Categoria::all();
        $noticias = Noticia::orderBy('id', 'DESC')->limit(6)->get();

        if (count($noticias) == 0) {
            $noticias = [];
        }

        return view('home', compact('noticias', 'message', 'typeMessage'));

    }


}
