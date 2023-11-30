@extends('master')

@section('content')

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label for="">Nome</label><br/>
        <input type="text" name="nome"><br/>
        <label for="">Descricao</label><br/>
        <input type="text" name="descricao"><br/>
        <label for="">Preço</label><br/>
        <input type="number" name="preco"><br/>
        <button style="submit">Adicionar</button>
    </form>
    @endsection
