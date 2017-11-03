
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container__card">
            {{--<div class="container__card__name">--}}
            {{--Teste De Boi--}}
            {{--</div>--}}
            <img src="http://www.rtc.cv/admin/imgBD/noticias/boi01_11_11_2013.jpg">
            <div class="container__card__user">
                <img src="http://enadcity.org/enadcity/wp-content/uploads/2017/02/profile-pictures.png" >
                <span>Teste Usuario</span>
            </div>
            <hr>
            <div class="container__card__info">
                <h3>{{ $product->title }}</h3>
                <h4>R${{ $product->price }}</h4>
                <a class="container__img"><img src="https://github.com/AndreLJS/projetos_cursos/blob/master/projeto_inicial_gulp/app/images/lance1.png?raw=true"></a>
            </div>
            <span>{{ $product->description }}</span>
        </div>
    </div>
@endsection
