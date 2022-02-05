<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variante;

class VariantesCovidController extends Controller
{
    //
    public function index(){
        $variantes = Variante::all();
        return view('variantes.index');
        
    }
}
