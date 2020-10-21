@extends('layouts.main')
@php

   $data = config('pasta');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $prodotto) {
        $prodotto["id"] = $key;
        if ($prodotto["tipo"] == "lunga") {
            $lunga[] = $prodotto;
        } elseif ($prodotto["tipo"] == "corta") {
            $corta[] = $prodotto;
        } elseif ($prodotto["tipo"] == "cortissima") {
            $cortissima[] = $prodotto;
        }
    };
    
@endphp

@section('title')
    La Molisana
@endsection

@section('mainContent')
<div class="main">
    <div class="wrapper">
        <section id="lunga">
            <h2 class="section-title">Le lunghe</h2>
            <ul class="list">
                @foreach ($lunga as $key => $prodotto)
                    <li class="list-item">
                        <div class="image">
                            <img src="{{$prodotto["src"]}}" alt="">
                            <div class="image-overlay">
                                <div class="image-overlay-link">
                                    <a href="prodotti/show/{{$prodotto["id"]}}">
                                        <h3>{{$prodotto["titolo"]}}</h3>
                                    </a> 
                                    <a href="prodotti/show/{{$prodotto["id"]}}">
                                        <img src="{{asset('images/icon.svg')}}" alt="">
                                    </a>    
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>

        <section id="corta">
            <h2 class="section-title">Le corte</h2>
            <ul class="list">
                @foreach ($corta as $key => $prodotto)
                    <li class="list-item">
                        <div class="image">
                            <img src="{{$prodotto["src"]}}" alt="">
                            <div class="image-overlay">
                                <a href="prodotti/show/{{$prodotto["id"]}}">{{$prodotto["titolo"]}}</a>
                            </div>  
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>

        <section id="cortissima">
            <h2 class="section-title">Le cortissime</h2>
            <ul class="list">
                @foreach ($cortissima as $key => $prodotto)
                    <li class="list-item">
                        <div class="image">
                            <img src="{{$prodotto["src"]}}" alt="">
                            <div class="image-overlay">
                                <a href="prodotti/show/{{$prodotto["id"]}}">{{$prodotto["titolo"]}}</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</div>
@endsection