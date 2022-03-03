<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    //
    public function product1()
    {
        return view('product')
        ->with('title', 'product 1');
    }
    public function product2()
    {
        return view('product2')
        ->with('title', 'product 2');
}
}
