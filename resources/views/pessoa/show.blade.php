@extends('layouts.app')
@section('topo_pagina','CONFIRMAÇÃO DE EXCLUSÃO')

    
@section('content')
<div class="container">
    <div class="alert alert-danger" role="alert">
        <h3>Deseja mesmo excluir <strong>{{$pessoa->nome}}</strong>?</h3>
    </div>
    
    <form action="/pessoas/{{$pessoa->id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger ml-2" value="SIM">
        <a href="/pessoas" type="button"class="btn btn-info ml-2">NÃO</a>
    </form>

    
</div>
@endsection