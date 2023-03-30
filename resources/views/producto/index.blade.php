@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
<div class="conteiner_producto">
    <div class="conteiner_producto__imagen">
        <img src="{{ asset('storage').'/'.$product->image_product }}" alt="">
    </div>
    <div class="conteiner_producto__detalles">
        <div class="conteiner_producto__name">
            <h2>{{$product->name_product}}</h2>
        </div>
        <div class="conteiner_producto__description">
            <p>{{ $product->description_product }}</p>
        </div>
        <div class="conteiner_producto__formAgregar">
            <form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                <input type="hidden" value="{{ $product->name_product }}" id="name" name="name">
                <input type="hidden" value="{{ $product->image_product }}" id="img" name="img">
                <input type="hidden" value="{{ $product->description_product }}" id="slug" name="slug">
                <div class="formQuantity">
                    <button type=button class="btnQuantity" onClick="restar({{ $product->price_product }})">-</button>
                    <input type="text" value="1" id="quantity" name="quantity" class="inputQuantity"/>
                    <button type=button onClick="sumar({{ $product->price_product }},{{ $product->stock_product }})" class="btnQuantity">+</button>
                </div>
                <input type="hidden" value="{{ $product->category_product }}" id="cat" name="cat">
                <input type="submit" class="boton_agregar" value='Agregar'/>
                <input type="hidden" value="{{ $product->price_product }}" name="price">
                <input type="text" value="S/ {{number_format($product->price_product,2); }}" id="price" class="inputPrice" disabled>
            </form>
        </div>    
    </div>
    
</div>
@endsection
