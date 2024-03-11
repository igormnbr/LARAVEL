@extends('layouts.main')

@section('title', 'Produto - HDC Events')

@section('content')

@if ($id != null)
    <p>Exibindo o produto de código {{$id}}</p>
@endif

@endsection