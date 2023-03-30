<?php
        if(Auth::user()->type_user!="administrador"){
            return redirect(route('inicio.index'));
        }
?>
@extends('layouts.app')
@section('content')
    <section class="panel_administrativo">
        <h2>Panel Administrativo</h2>
        <div class="containerButtons">
            <a href="{{ route('usuarios.index') }}" class="containerButtons__button">
                <div class="fa-solid fa-users containerButtons__image"></div>
                <p class="containerButtons__title">Administrar Usuarios</p>
            </a>
            <a href="{{ route('categorias.index') }}" class="containerButtons__button">
                <div class="fa-solid fa-box-archive containerButtons__image"></div>
                <p class="containerButtons__title">Administrar Categorias</p>
            </a>
            <a href="{{ route('productos.index') }}" class="containerButtons__button">
                <div class="fa-solid fa-boxes-stacked containerButtons__image"></div>
                <p class="containerButtons__title">Administrar Productos</p>
            </a>
        </div>
    </section>
@endsection