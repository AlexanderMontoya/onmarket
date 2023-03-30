<?php
        if(Auth::user()->type_user!="administrador"){
            return redirect('/categoria/abarrotes/');
        }
?>
@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Product:</strong>
                            {{ $product->name_product }}
                        </div>
                        <div class="form-group">
                            <strong>Description Product:</strong>
                            {{ $product->description_product }}
                        </div>
                        <div class="form-group">
                            <strong>Stock Product:</strong>
                            {{ $product->stock_product }}
                        </div>
                        <div class="form-group">
                            <strong>Category Product:</strong>
                            {{ $product->category_product }}
                        </div>
                        <div class="form-group">
                            <strong>Price Product:</strong>
                            {{ $product->price_product }}
                        </div>
                        <div class="form-group">
                            <strong>Image Product:</strong>
                            <img src="{{ asset('storage').'/'.$product->image_product }}" alt="Producto OnMarket">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
