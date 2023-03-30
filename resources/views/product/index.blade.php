<?php
        if(Auth::user()->type_user!="administrador"){
            return redirect('/categoria/abarrotes/');
        }
?>
@extends('layouts.app')

@section('template_title')
    Product
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('productos.index')}}">Todo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=abarrotes">Abarrotes</a></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=frutas">Frutas</a></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=verduras">Verduras</a></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=carnes">Carnes, Aves Y Pescados</a></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=lacteos">Lacteos</a></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=panaderia">Panaderia y Pasteleria</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=cuidadoPersonal">Cuidado Personal</a></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=limpieza">Limpieza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=bebidas">Bebidas y Licores</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=kids">Bebes</a></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=libreria">Libreria</a></li>
            <li><a class="dropdown-item" href="{{route('productos.index')}}?categoria=bazar">Bazar</a></li>
        </ul>
    </div>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productos') }}
                            </span>
                            
                            <?php $category=isset($_GET['categoria'])?$_GET['categoria']:'';?>
                            <?php $enlace_categoria=isset($_GET['categoria'])? '?categoria='.$category:'';?>
                             <div class="float-right">
                                <a href="{{ route('product.pdf') }}{{$enlace_categoria}}"
                                class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('PDF') }}
                                </a>
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Producto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Stock</th>
										<th>Categoria</th>
										<th>Precio</th>
										<th>Foto</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <?php if ($category=='' || $product->category_product==$category){?>
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            
											<td>{{ $product->name_product }}</td>
											<td>{{ $product->description_product }}</td>
											<td>{{ $product->stock_product }}</td>
											<td>{{ $product->category_product }}</td>
											<td>{{ $product->price_product }}</td>
											<td><img src="{{ asset('storage').'/'.$product->image_product }}" alt="Producto OnMarket" width=100></td>
                                            <td>
                                                <form action="{{ route('productos.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Ver Producto</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
