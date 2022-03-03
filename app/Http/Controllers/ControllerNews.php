<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNews extends Controller
{
    //
    public function index(Request $request){
       
        return view('news')
        ->with('title', 'news' )
        ->with('request', $request->id);

}
}
