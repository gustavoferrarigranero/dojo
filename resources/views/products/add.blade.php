
@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="products">
        <form method="post" action="{{ route("products/store") }}">
            {{ csrf_field() }}
            <div class="products__item">
                <input type="text" placeholder="Título" name="title" id="title">
            </div>
            <div class="products__item">
                <textarea placeholder="Descrição" name="description" id="description"></textarea>
            </div>
            <div class="products__item">
                <input type="text" placeholder="Valor Inicial" name="price" id="price">
            </div>
            <div class="products__item">
                <input type="text" placeholder="Valor de Lance" name="bid" id="bid">
            </div>
            <div class="products__item">
                <input type="datetime-local" placeholder="Data de Encerramento" name="date_end" id="date_end">
            </div>
            <div class="products__item">
                <label for="image">Inserir Imagem</label>
                <input type="file" name="image" id="image">
            </div>

            <div class="products__button">
                <button type="submit">
                    LEILOAR
                </button>
            </div>
        </form>
    </div>
    </div>
@endsection
