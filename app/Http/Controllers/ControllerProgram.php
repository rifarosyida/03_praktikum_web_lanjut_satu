<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProgram extends Controller
{
    public function program1()
    {
    return view ('program')
        ->with('title', 'Karir');
}
public function program2()
{
return view ('program2')
    ->with('title', 'Magang');
}
}