@extends('layouts.main')
@section('title', 'HDC - Produtos teste - ')

@section('content')
    <h1>Tela de produtos - Teste</h1>
    @if ($id != null)
        <p>Produto ID: {{ $id }}</p>
    @endif
@endsection