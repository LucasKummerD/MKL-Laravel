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
        return view('admin.index')->with('products', $products);
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
            'filepath' => 'mimetypes:application/zip'
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
        dd($product);
        
        $product->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.show_product');
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

        return view('admin.edit')
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
    public function update(Request $request, $id)
    {
        $product = product::find($id);

        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->precio = $request->input('precio');
        $product->stock= $request->input('stock');
        
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
    return view('admin.show_clients')->with('users', $users);
    }

    public function showClient($id) 
    {
    $user = User::find($id);
    return view('admin.show_client')->with('user', $user);
                
                //va a haber que agregar mas cmapos!

    }
    
}
