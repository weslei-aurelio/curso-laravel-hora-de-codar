@extends('layouts.main')
@section('title', 'HDC - Produtos - ')

@section('content')
    <h1>Tela de produtos</h1>
    @if ($busca != '')
        <p>O usuário está buscando por: {{ $busca }}</p>
    @endif
@endsection