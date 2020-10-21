@extends('layouts.main')

@section('title')
    La Molisana - Prodotti
@endsection

@section('mainContent')
<div class="main">
    <div class="wrapper">
        <h1>Prodotti</h1>
            @if (!empty($paste))
                @foreach ( $paste as $key => $tipo)
                    <section id="{{$key}}">
                        <h2 class="section-title">{{$key}}</h2>
                        <ul class="list">
                            @foreach ($tipo as $prodotto)
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
                @endforeach
            @endif
        </div>
    </div>
@endsection