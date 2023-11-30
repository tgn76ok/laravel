@extends('master')

@section('content')
@if (session()->has('message'))
    {{session()->get('message')}}
@endif
    <h2>Edit</h2>

    <form action="{{ route('produtos.update',['produto'=>$produto->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <label for="">Nome</label><br/>
        <input type="text" name="nome" value="{{$produto->nome}}"><br/>
        <label for="">Descricao</label><br/>
        <input type="text" name="descricao" value="{{$produto->descricao}}"><br/>
        <label for="">Preço</label><br/>
        <input type="number" name="preco" value="{{$produto->preco}}"><br/>
        <button style="submit">Adicionar</button>
    </form>
    @endsection
