

@extends('layouts.app')

@section('topo_pagina','LISTA DE PESSOAS')
@section('content')


<div class="container">
    <a type="button" class="btn btn-outline-info  mb-2 ml-2" href="/">INÍCIO</a>
    <a type="button" class="btn btn-outline-info mb-2 ml-2" href="/pessoas/create">CADASTRAR</a><br>


<table class="table tl table-borderless table-hover ml-2">
    @if (count($pessoas) > 0)
        <caption class=" alert alert-warning mt-2" role="alert" >Lista de pessoas Cadastradas</caption>
    @else
        <caption class=" alert alert-danger mt-2" role="alert">Nenhuma Pessoa Cadastrada</caption>
    @endif
    <thead>
        <tr class="bg-info">
            <th scope="col">NOME</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">AÇÕES</th>
        </tr>
    </thead>
    
    <tbody>
        @if (!empty($pessoas))
            @foreach ($pessoas as $pessoa)
                <tr class="table-info">
                    <td>{{$pessoa->nome}}</td>
                    <td>{{$pessoa->telefone}}</td>
                    <td>{{$pessoa->email}}</td>
                    <td>
                        <a type="button" class="btn btn-info ml-2" href="/pessoas/{{$pessoa->id}}/edit">EDITAR</a>
                        <a type="button" class="btn btn-danger ml-2" href="/pessoas/{{$pessoa->id}}">EXCLUIR</a>
                    </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td>Erro, Não existe dados cadastrados</td>
            </tr>    
        @endif
    </tbody>
   
</table>
</div>

@endsection

