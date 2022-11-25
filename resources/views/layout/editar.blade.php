@extends('layout.site')

@section('titulo', 'Loja de produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editar produto</h3>
        <div class="row">
        <form action="{{route('produtos.atualizar',$produto->id)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('layout._includes.form')

            <button class="btn blue"> Atualizar </button>
        </form>
        </div>
    </div>
    

@endsection