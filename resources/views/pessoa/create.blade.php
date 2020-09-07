@extends('layouts.app')
    
@section('content')
<div class="container">
   
    @if (isset($pessoa))
        @section('topo_pagina','ATUALIZAR PESSOA')
        <div class="alert alert-primary" role="alert">
            <h3>Editando <strong>{{$pessoa->nome}}</strong></h3>
        </div>
        
    <form action="/pessoas/{{$pessoa->id}}" method="post">
        @method('PUT')

    @else
        {{-- <div class="alert alert-info" role="alert">
            <strong><label class="label h3 mr-2 ml-5">Cadastro Pessoas</label></strong>
        </div> --}}
    @section('topo_pagina','CADASTRO DE PESSOAS')
    <form action="/pessoas" method="post">

    @endif

        @csrf
        <div class="form-group ml-5">
            <div class="col-md-8">
                Nome <br>
                <input class="form-control" type="text" name="nome" value="{{$pessoa->nome ?? ''}}" required> <br>
            </div>
        </div>

        <div class="form-group ml-5">
            <div class="col-md-8 ">
                Telefone <br>
                <input class="form-control" type="text" name="telefone" value="{{$pessoa->telefone ?? ''}}" required> <br>
            </div>
        </div>

        <div class="form-group ml-5">
            <div class="col-md-8">
                Email <br>
                <input class="form-control" type="text" name="email" value="{{$pessoa->email ?? ''}}" required> <br><br>
        
                @if (isset($pessoa))
                    <input type="submit" class="btn btn-outline-success" value="ATUALIZAR">
                    <a type="button" class="btn btn-outline-info ml-2" href="/pessoas">LISTA DE PESSOAS</a>
                    <a type="button" class="btn btn-outline-info ml-2" href="/">INÍCIO</a>
                @else
                    <input type="submit" class="btn btn-outline-success"  value="SALVAR">
                    <a type="button" class="btn btn-outline-info ml-2" href="/pessoas">LISTA DE PESSOAS</a>
                    <a type="button" class="btn btn-outline-info ml-2" href="/">INÍCIO</a>
                @endif
            </div>
        </div>

    </form>
    
</div>
@endsection