@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@if ($id != null)
    <p>Exibindo o produto com o id: {{$id}}</p>
@endif

@endsection

@section('title', 'Produtos')

@section('content')
    
<h1>Tela de Produtos</h1>
@endsection