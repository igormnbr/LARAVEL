@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
        <h1>Welcome page</h1>
        <img src = "/img/banner.jpg" width = "480" alt = "banner">

        @if ($nome == "Matheus")
            <p>O nome é Matheus</p>
        @elseif ($nome == "Igor")
            <p>O nome é Igor</p>
        @else
            <p>O nome não é Matheus nem Igor</p>
        @endif
@endsection