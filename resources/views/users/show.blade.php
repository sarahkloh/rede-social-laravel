@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1> {{ $user->name }} </h1>
    </div>
    <div class="row justify-content-center">
        <ul class="list-group">
            @foreach($user->posts as $umPost)
            <li class="list-group-item">{{$umPost->content}} -{{ $umPost->likes->count() }} likes - {{ $umPost->comments->count() }} comentários <small>{{ \Carbon\Carbon::parse($umPost->created_at)->format('d/m/Y h:m') }}</small></li>
            @endforeach
        </ul>
    </div>

    <div class="row justify-content-center">
        <h1>Seguindo:</h1>
        <ul class="list-group">
            @foreach($user->follows as $seguindo)
            <li class="list-group-item"><a href="/user/{{$seguindo->id}}" class="link-underline-light">{{$seguindo->name}}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="row justify-content-center">
        <h1>Seguidores:</h1>
        <ul class="list-group">
            @foreach($user->followers as $seguidor)
            <li class="list-group-item"><a href="/user/{{$seguidor->id}}" class="link-underline-light">{{$seguidor->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection