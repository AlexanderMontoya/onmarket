@extends('layouts.app')
@section('content')
    <section class="productos">
        <h2 class="products__subtitle">
        <?php print_r($description_category[0]->description_category)?>
        </h2>
        <div class="conteiner_Products">
            @foreach($products as $pro)
                    <div class="card_producto">
                        <div class="card_producto__img">
                            <img src="{{ asset('storage').'/'.$pro->image_product }}" alt="{{ $pro->name_product }}">    
                        </div>
                        <div class="card_body">
                            <a class="nombre_producto" href="{{ route('producto.index') }}/{{ $pro->id }}" title="{{ $pro->name_product }}">{{ $pro->name_product }}</a>
                            <p class="precio_producto">S/. {{ number_format($pro->price_product,2); }}</p>
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $pro->name_product }}" id="name" name="name">
                                <input type="hidden" value="{{ $pro->price_product }}" id="price" name="price">
                                <input type="hidden" value="{{ $pro->image_product }}" id="img" name="img">
                                <input type="hidden" value="{{ $pro->description_product }}" id="slug" name="slug">
                                <input type="hidden" value="1" id="quantity" name="quantity">
                                <input type="hidden" value="{{ $pro->category_product }}" id="cat" name="cat">

                                <div class="card-footer" style="background-color: white;">
                                        <div class="row">
                                        <button class="boton_agregar">
                                            <i class="fa fa-shopping-cart"></i> Agregar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
             @endforeach
        </div>  
    </section>
@endsection