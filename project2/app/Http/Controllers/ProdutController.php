<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutController extends Controller
{
    public function list(){
        return view('product');
    }
}
