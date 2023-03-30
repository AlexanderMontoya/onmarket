<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class InicioController
 * @package App\Http\Controllers
 */
class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bebidas= DB::select("select * from products where category_product='bebidas' LIMIT 3");
        $libreria= DB::select("select * from products where category_product='libreria' LIMIT 3");
        $lacteos= DB::select("select * from products where category_product='lacteos' LIMIT 3");
        return view('inicio.index')
        ->with(compact('bebidas')) 
        ->with(compact('lacteos')) 
        ->with(compact('libreria'));
    }
}