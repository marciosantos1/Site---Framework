<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class IndexController extends Controller
{
    public function index() {
       $titulo = 'Home - Empresa Brusque-sc';
       $rodape = date('Y').' Todos os direitos reservados';
       $dataHoraIp = date('d/m/Y H:i')." ".\Request::getClientIp(true);
       
      
       
    return view('site.index', compact('titulo','rodape','dataHoraIp'));
    
    }
    public function index2() {
       $titulo = 'Institucional - Empresa';
       $rodape = date('Y').' Todos os direitos reservados';
       $dataHoraIp = date('d/m/Y H:i')." ".\Request::getClientIp(true);
       
      
       
    return view('site.index2', compact('titulo','rodape','dataHoraIp'));
    
    }
    public function index3() {
       $titulo = 'Produtos - Empresa';
       $rodape = date('Y').' Todos os direitos reservados';
       $dataHoraIp = date('d/m/Y H:i')." ".\Request::getClientIp(true);
       
      
       
    return view('site.index3', compact('titulo','rodape','dataHoraIp'));
    
    }
}
