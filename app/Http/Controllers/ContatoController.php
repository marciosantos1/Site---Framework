<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util;

class ContatoController extends Controller
{
    public function index() {
        
        $usuario [0]['nome'] = 'João';
        $usuario [0]['cidade'] = 'Brusque';
        
        $usuario [1]['nome'] = 'Bruno';
        $usuario [1]['cidade'] = 'Taubaté';

        return $usuario;
    }
    
    public function rh() {
        
    }
    
   
}
