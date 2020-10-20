@extends('layouts.main')
@php

   $data = config('pasta');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $prodotto) {
        if ($prodotto["tipo"] == "lunga") {
            $lunga[$key] = $prodotto;
        } elseif ($prodotto["tipo"] == "corta") {
            $corta[$key] = $prodotto;
        } elseif ($prodotto["tipo"] == "cortissima") {
            $cortissima[$key] = $prodotto;
        }
    };
    
@endphp

@section('title')
    La Molisana
@endsection

@section('mainContent')
<h2>Lunga</h2>
<ul>
    @foreach ($lunga as $key => $prodotto)
        <li>
            <img src="{{$prodotto["src"]}}" alt="">
            <h3>{{$prodotto["titolo"]}}</h3>
            <a href="prodotti/show/{{$key}}"></a>
        </li>
    @endforeach
</ul>
<h2>Corta</h2>
<ul>
    @foreach ($corta as $key => $prodotto)
        <li>
            <img src="{{$prodotto["src"]}}" alt="">
            <h3>{{$prodotto["titolo"]}}</h3>
            <a href="prodotti/show/{{$key}}"></a>
        </li>
    @endforeach
</ul>
<h2>Cortissima</h2>
<ul>
    @foreach ($cortissima as $key => $prodotto)
        <li>
            <img src="{{$prodotto["src"]}}" alt="">
            <h3>{{$prodotto["titolo"]}}</h3>
            <a href="prodotti/show/{{$key}}"></a>
        </li>
    @endforeach
</ul>
@endsection