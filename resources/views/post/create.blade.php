@extends('layouts.app')
@section('content')
<h1>Criar um post</h1>
<br>
<div class="row">
    <div class="col-md-6">
<form method="POST" action="/post">
    @csrf
  <div class="form-group mb-3">
    <label for="content">Conteúdo</label> 
    <textarea id="content" name="content" cols="40" rows="5" class="form-control"></textarea>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
</div>
</div>
@endsection