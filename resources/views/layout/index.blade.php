@extends('layout.site')

@section('titulo', 'Loja de produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de produtos</h3>
        <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('produtos.editar', $produto->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('produtos.deletar', $produto->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('produtos.adicionar') }}">Adicionar</a>
        </div>
    </div>
    

@endsection
