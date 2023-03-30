@extends('layouts.app')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ route('inicio.index') }}/img/slider1_vinos.jpg" class="d-block w-100 imagen_carousel" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Los mejores Licores</h5>
            <p>Encuentra distintos licores para cualquier ocasion en OnMarket</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ route('inicio.index') }}/img/slider2_verduras.jpg" class="d-block w-100 imagen_carousel" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Verduras Frescas</h5>
            <p>Prepara la comida con las ricas y frecas verduras de OnMarket</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ route('inicio.index') }}/img/slider3_carnes.jpg" class="d-block w-100 imagen_carousel" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Carnes de calidad</h5>
            <p>La mejor calidad de carne la encuentras en OnMarket</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="conteiner_listProduct">
        <h2 class="conteiner_listProduct__title">Bebidas</h2>
        <a href="{{ route('inicio.index')}}/categoria/bebidas" class="conteiner_listProduct__enlace">Ver Todo</a>
        <div class="conteiner_Products">
            @foreach($bebidas as $pro)
                <div class="card_producto" style="height: 300px">
                    <div class="card_producto__img">
                        <img src="{{ asset('storage').'/'.$pro->image_product }}" alt="{{ $pro->name_product }}">    
                    </div>
                    <div class="card_body">
                        <a class="nombre_producto" href="{{ route('producto.index') }}/{{ $pro->id }}" title="{{ $pro->name_product }}">{{ $pro->name_product }}</a>
                        <p class="precio_producto">S/. {{ number_format($pro->price_product,2); }}</p>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="conteiner_listProduct">
        <h2 class="conteiner_listProduct__title">Helados</h2>
        <a href="{{ route('inicio.index')}}/categoria/lacteos" class="conteiner_listProduct__enlace">Ver Todo</a>
        <div class="conteiner_Products">
            @foreach($lacteos as $pro)
                <div class="card_producto" style="height: 300px">
                    <div class="card_producto__img">
                        <img src="{{ asset('storage').'/'.$pro->image_product }}" alt="{{ $pro->name_product }}">    
                    </div>
                    <div class="card_body">
                        <a class="nombre_producto" href="{{ route('producto.index') }}/{{ $pro->id }}" title="{{ $pro->name_product }}">{{ $pro->name_product }}</a>
                        <p class="precio_producto">S/. {{ number_format($pro->price_product,2); }}</p>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="conteiner_listProduct">
        <h2 class="conteiner_listProduct__title">Libreria</h2>
        <a href="{{ route('inicio.index')}}/categoria/libreria" class="conteiner_listProduct__enlace">Ver Todo</a>
        <div class="conteiner_Products">
            @foreach($libreria as $pro)
                <div class="card_producto" style="height: 300px">
                    <div class="card_producto__img">
                        <img src="{{ asset('storage').'/'.$pro->image_product }}" alt="{{ $pro->name_product }}">    
                    </div>
                    <div class="card_body">
                        <a class="nombre_producto" href="{{ route('producto.index') }}/{{ $pro->id }}" title="{{ $pro->name_product }}">{{ $pro->name_product }}</a>
                        <p class="precio_producto">S/. {{ number_format($pro->price_product,2); }}</p>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection