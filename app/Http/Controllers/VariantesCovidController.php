<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariantesCovidController extends Controller
{
    //
    public function index(){
        return view('variantes.index');
    }
}
