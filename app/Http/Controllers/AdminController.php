<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.showProducts')->with('products', $products);
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
        
        if($request->file('filepath') !== null) {
            $file = $request->file('filepath')->store('uploads');
            $product->filepath = $file;
        }
       
        
        $product->save();

        return redirect('admin/showProducts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function showProduct($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.showProduct')
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

        $category = Category::all();
        $product = Product::find($id);

        return view('admin.editProduct')
            ->with('product', $product)
            ->with('category', $product->category)
            ->with('category', $category);
    }

    /**     
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $product = Product::find($id);

        $product->nombre = input('nombre');
        $product->descripcion = input('descripcion');
        $product->precio = input('precio');
        $product->stock = input('stock');
        $product->category_id = input('category_id');
        
        $product->save();

        return redirect("/products/$product->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showClients() 
    {
    $users = User::all();
    return view('admin.showClients')->with('users', $users);
    }

    public function showClient($id) 
    {
    $user = User::find($id);
    return view('admin.showClient')->with('user', $user);
                
                //va a haber que agregar mas cmapos!

    }
    
}
