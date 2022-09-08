@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Hello world</h1>

<img src="/img/banner.jpg" alt="Banner">

@if ($nome == 'João')
    <p>Meu nome é {{ $nome }}</p>
@endif
@endsection