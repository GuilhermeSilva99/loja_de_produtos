@extends('layout.site')

@section('titulo', 'Loja de produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Entrar no sistema</h3>
        <div class="row">
        <form action="{{route('login.entrar')}}" method="POST">
            {{ csrf_field() }}
            <div class="input-field">
                <input type="text" name="email" minlength="3" required>
                <label>Email</label>
            </div>
            <div class="input-field">
                <input type="password" name="senha" minlength="3" required>
                <label>Senha</label>
            </div>
            

            <button class="btn blue"> Entrar </button>
        </form>
        </div>
    </div>
    

@endsection