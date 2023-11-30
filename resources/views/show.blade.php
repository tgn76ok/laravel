@extends('master')

@section('content')

<h2>Nome - {{$produto->nome}}</h2>
<p>Descriço:{{$produto->descricao}}</p>
<p>preço:{{$produto->preco}}</p>

<form action="{{route('produtos.destroy',['produto'=> $produto->id ])
}} "method="post">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button style="submit">DELETE</button>
</form>

@endsection