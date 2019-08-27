<?php

namespace App\Util;
class LogConsulta{
    
    private $caminho;
    
    public function __construct($caminho) {
        $this->caminho = $caminho;
    }
    public function registrar($formato = 'n'){
        
        if($formato == 'n'){
            $data = date('d/m/Y H:i');
            
        }else if ($formato == 't') {
            $data = time();
        }else{
            $data = 'Parâmetro inválido';
        }
        file_put_contents($this->caminho.'/log_geral.txt', $data);
        return $data;
        
        
    }   
}
