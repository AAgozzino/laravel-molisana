@extends('layouts.main')

@section('title')
    {{$data["titolo"]}}  
@endsection

@section('mainContent')
    <div class="card">
        <div class="wrapper">
            <h1 class="card-title">{{$data["titolo"]}}</h1>
            <img src="{{$data["src-h"]}}" alt="">
            <img src="{{$data["src-p"]}}" alt="">
            <p class="card-description">{!!$data["descrizione"]!!}</p>
        </div>
    </div>    
@endsection