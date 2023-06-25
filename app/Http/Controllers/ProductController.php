<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['products']=Product::paginate();
        return view('product.index', $datos);
    }

    public function pdf()
    {
        $datos = Product::paginate();
        $pdf = PDF::loadView('product.pdf',['datos'=>$datos]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $categories= DB::select('select * from categories');
        return view('product.create', compact('product'),compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->except('_token');

        if($request->hasFile('image_product')){
            $product['image_product']=$request->file('image_product')->store('uploads','public');
        }
        
        Product::insert($product);
        /*request()->validate(Product::$rules);

        $product = Product::create($request->all());*/

        return redirect()->route('productos.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories= DB::select('select * from categories');
        return view('product.edit', compact('product'),compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = $request->except('_token','_method');
        if($request->hasFile('image_product')){
            $product['image_product']=$request->file('image_product')->store('uploads','public');
        }
        Product::where('id','=',$id)->update($product);
        $product = Product::findOrFail($id);
        $categoria=$request->category_product;
        return redirect('/chapters/productos?categoria='.$categoria)
            ->with('success', 'Product updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Product deleted successfully');
    }
}
