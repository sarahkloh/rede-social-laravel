<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedeController extends Controller
{

    public function create()
{
    return view('post.create');

}
}
