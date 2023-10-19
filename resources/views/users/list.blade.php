@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1> Lista de usuários </h1>
    </div>
    <div class="row justify-content-center">
        <ul class="list-group">
            @foreach($listaUser as $umUser)
            <li class="list-group-item"><a href="/user/{{$umUser->id}}" class="link-underline-light">{{$umUser->name}}</a> - {{$umUser->email}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection