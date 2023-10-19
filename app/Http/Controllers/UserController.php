<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UserController extends Controller
{
    public function index(){
        $listaUser = User::all();
        return view('users.list',['listaUser' => $listaUser]);
    }

    public function show($id){
        $user = User::where('id', $id)->with('posts', 'posts.comments', 'posts.likes', 'follows', 'followers')->first();
        //dd($user);
        return view('users.show',['user' => $user]);
    }
    
}
