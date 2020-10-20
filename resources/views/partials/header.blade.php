{{-- HEADER --}}
<header>
    <div class="wrapper">
        <div class="logo">
            <img src="{{asset('images/marchio.png')}}" alt="Logo La Molisana">
        </div>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-list-item">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-list-item">
                    <a class="active" href="{{route('products')}}">Prodotti</a>
                </li>
                <li class="nav-list-item">
                    <a href="{{route('news')}}">News</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
{{-- /HEADER --}}