<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('home');
    }

    public function records()
    {
        $records= Record::all();

        return view('admin.records')->with('records', $records);
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $records = Record::all();

        return view('admin.editHome');
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
        $records = Home::find($id);

        $records->product1 = input('product1');
        $records->product2 = input('product2');
        $records->product3 = input('product3');
        $records->product4 = input('product4');
        $records->product5 = input('product5');
        $records->product6 = input('product6');
        $records->product7 = input('product7');
        $records->product8 = input('product8');
        $records->product9 = input('product9');

        
        $records->save();

        return redirect('/home');
    }

}
