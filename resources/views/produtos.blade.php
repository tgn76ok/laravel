@extends('master')

@section('content')

<a href="{{route('produtos.create')}}">Create</a>
<hr>
<h1>Produtos</h1>
<ul>
    @foreach ($produtos as $produto)
        <li>{{$produto->nome}} |<a href="{{route('produtos.edit',['produto'=>$produto->id])}}">Editar</a>|<a href="{{ route('produtos.show',['produto'=>$produto->id])}}">Show</a> </li>
    @endforeach
</ul>
@endsection