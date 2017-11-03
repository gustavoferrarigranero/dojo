@extends('layouts.app')

@section('content')
   <nav class="header">
       <ul>
           <li><a href="/">Home</a></li>
           <li><a href="{{ route('products') }}">Vender</a></li>
           <li><a href="{{ route('home') }}">Comprar</a></li>
           <li><a href="{{ route('logout') }}">Logout</a></li>
       </ul>
   </nav>
    <div class="container">
        @foreach($products as $product)
            <a href="{{ route("products/detail", ["id" => $product->id]) }}" class="container__card">
                <div class="container__card__user">
                    <img src="http://enadcity.org/enadcity/wp-content/uploads/2017/02/profile-pictures.png" >
                    <span>Teste Usuario</span>
                </div>
                {{--<div class="container__card__name">--}}
                   {{--Teste De Boi--}}
                {{--</div>--}}
                <img src="http://www.rtc.cv/admin/imgBD/noticias/boi01_11_11_2013.jpg">
                <div class="container__card__info">
                  <h3>{{ $product->title }}</h3>
                  <h4>{{ $product->price }}</h4>
                </div>
            </a>
        @endforeach

    </div>
@endsection
