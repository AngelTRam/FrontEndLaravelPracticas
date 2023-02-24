<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductosController extends Controller
{
    public function index(){
        $request = Http::get('http://127.0.0.1:8000/api/productos');
        $productos = $request->json();
        return view('productos',Compact('productos'));
    }
}
