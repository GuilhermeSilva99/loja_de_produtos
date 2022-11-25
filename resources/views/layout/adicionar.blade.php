@extends('layout.site')

@section('titulo', 'Loja de produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar produto</h3>
        <div class="row">
        <form action="{{route('produtos.salvar')}}" method="POST">
            {{ csrf_field() }}
            @include('layout._includes.form')

            <button class="btn blue"> Salvar </button>
        </form>
        </div>
    </div>
    

@endsection