<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    public function showProducts(Request $request) 
    {

        $products = Product::search($request->nombre)->paginate(5);
        $categories = Category::all();
        return view('client.showProducts')->with('products', $products)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create')->with('products', Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'category_id' => 'required'
        ];

        $messages = [
            'required' => 'el campo :attribute es requerido'
        ];
       

        $this->validate($request, $rules, $messages);

        $product = new Product($request->all());
        
        if($request->file('image') !== null) {
            $file = $request->file('image')->store('products', 'public');
            $product->image = $file;
        }
        
        $product->save();

        return redirect('/showProducts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProduct($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('client.showProduct')
                    ->with('product', $product)
                    ->with('category', $product->category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.editProduct')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->precio = $request->input('precio');
        $product->stock = $request->input('stock');
        $product->category_id = $request->input('category_id');
       
        $product->save();

        return redirect("/$product->id/showProduct");  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        $product->delete();
        return redirect('/showProducts');
    }

    public function productosDestacados() 
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.productosDestacados')->with('products', $products)->with('categories', $categories);
    }

    
}
