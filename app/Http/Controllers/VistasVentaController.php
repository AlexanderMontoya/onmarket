<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PDF;

/**
 * Class AbarroteController
 * @package App\Http\Controllers
 */
class VistasVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return redirect('/');
    } 

    public function show($id)
    {
        $product = Product::find($id);
        return view('producto.index', compact('product'));
    }

    public function abarrotes()
    {
        $products = DB::select('select * from products where category_product = ?', ["abarrotes"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["abarrotes"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function frutas()
    {
        $products = DB::select('select * from products where category_product = ?', ["frutas"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["frutas"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function verduras()
    {
        $products = DB::select('select * from products where category_product = ?', ["verduras"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["verduras"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function carnes()
    {
        $products = DB::select('select * from products where category_product = ?', ["carnes"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["carnes"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function lacteos()
    {
        $products = DB::select('select * from products where category_product = ?', ["lacteos"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["lacteos"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function cuidadoPersonal()
    {
        $products = DB::select('select * from products where category_product = ?', ["cuidadoPersonal"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["cuidadoPersonal"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function panaderia()
    {
        $products = DB::select('select * from products where category_product = ?', ["panaderia"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["panaderia"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function limpieza()
    {
        $products = DB::select('select * from products where category_product = ?', ["limpieza"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["limpieza"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function bebidas()
    {
        $products = DB::select('select * from products where category_product = ?', ["bebidas"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["bebidas"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function kids()
    {
        $products = DB::select('select * from products where category_product = ?', ["kids"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["kids"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function libreria()
    {
        $products = DB::select('select * from products where category_product = ?', ["libreria"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["libreria"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }
    public function bazar()
    {
        $products = DB::select('select * from products where category_product = ?', ["bazar"]);
        $description_category=DB::select('select description_category from categories where id_name_category = ?', ["bazar"]);
        return view('inicio.VistaVenta',compact('products'),compact ('description_category'));
    }

    
}