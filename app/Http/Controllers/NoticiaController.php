<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{

    public function index () {

        $categorias = Categoria::all();

        return view('cadastrar', compact('categorias'));

    }


    public function cadastrarNoticia (Request $request) {

        $dados = $request->all();

        $createNoticia['titulo'] = $dados['titulo'];
        $createNoticia['id_categoria'] = $dados['id_categoria'];
        $createNoticia['descricao'] = $dados['descricao'];

        $created = Noticia::create($createNoticia);

        if ($created) {
            Session::put('typeMessage', 'Notícia criado com sucesso!');
            Session::put('message', 'sucesso');
            return redirect()->route('home');
        }

        Session::put('typeMessage', 'Erro ao criar a notícia!');
        Session::put('message', 'erro');
        return redirect()->route('cadastrar');

    }

    public function pesquisaNoticia (Request $request) {

        $titulo = $request->get('titulo');
        $noticias = Noticia::where('titulo', 'like', '%'.$titulo.'%')->get();
        return $noticias;

    }

}
