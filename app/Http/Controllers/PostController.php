<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use \App\Models\User;
use \App\Models\Post;

class PostController extends Controller
{


public function create()
{
    return view('post.create');

}

public function store(Request $request)
    {
        //faço as validações dos campos

        //vetor com as mensagens de erro
        $messages = array(
            'content.required' => 'É obrigatório um título para a atividade',
        );

        //vetor com as especificações de validações
        $regras = array(
            'content' => 'required|string|max:255',
        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect("post/create")
            ->withErrors($validador)
            ->withInput($request->all);
        }

        //se passou pelas validações, processa e salva no banco...
        $obj_post = new Post();
        $obj_post->content =       $request['content'];
        $obj_post->user_id = Auth::id(); //pegando o ID do usuário autenticado no sistema.
        $obj_post->save();

        return redirect('/home')->with('success', 'Post criada com sucesso!!');

}
}






