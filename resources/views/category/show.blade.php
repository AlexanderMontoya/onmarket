<?php
        if(Auth::user()->type_user!="administrador"){
            return redirect('/categoria/abarrotes/');
        }
?>
@extends('layouts.app')

@section('template_title')
    {{ $category->name ?? 'Show Category' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Category</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Description Category:</strong>
                            {{ $category->description_category }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
