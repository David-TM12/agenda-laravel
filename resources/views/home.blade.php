@extends('layouts.app')

@section('topo_pagina','SEJA BEM VINDO')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Olá Você está logado')}} <br>
                    {{-- {{__('Você está logado') Auth::user()->name}} --}}
                    <a href="/" class="btn btn-success">INÍCIO</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
