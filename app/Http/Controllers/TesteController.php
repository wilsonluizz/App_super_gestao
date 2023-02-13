<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($n1, $n2){
        // return "a soma de $n1 + $n2 é " . $n1 + $n2;
        return view('site.teste', compact('n1', 'n2'));
    }
}      
