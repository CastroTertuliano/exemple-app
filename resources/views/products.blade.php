@extends('layouts.main')

@section('title produtos', 'Produtos')

@section('content')

  <h1>Área de produtos</h1>

    @if($busca != "")

        <p>O usuário está buscando por: {{ $busca }}</p>

    @endif
        
  @endsection