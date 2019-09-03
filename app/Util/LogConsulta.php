<?php

namespace App\Util;

{
    function __construct() {

}
}
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
        
        if(file_exists($this->caminho.'/log_geral.txt')){
            $dadosAtuais = $this->capturar();
            $dadosAtuais .= "\n\n"."DATA E HORA = ".$data;
             $dadosAtuais .= " __ "."IP = ".$this->obterIp();
             $dadosAtuais .= " __ "."titulo = ".$this->obterTitulo();
            $this->gravarArquivos($dadosAtuais);
        } else {
            $this->gravarArquivos($data);
            
        }
        return $dadosAtuais; 
       }
    
    public function gravarArquivos($data){
        
    file_put_contents($this->caminho.'/log_geral.txt',$data);  
  
    }
    public function capturar(){
        
    $dados = file_get_contents($this->caminho.'/log_geral.txt');  
    return $dados;
    }
    public function obterIp(){
        
    $clienteIp = \Request::getClientIp(true);
       return $clienteIp;
  
    }
    public function obterTitulo(){
        
    
$ssite=('http://localhost:8000/'); 

$q=@file_get_contents($ssite); 
preg_match_all('#<title>([^<\/]{1,})<\/title>#i',$q,$match);

$otitle=($match[1][0]); 

return $otitle;


  
    }
    
}
