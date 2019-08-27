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
        
        if(file_exists($this->caminho.'/log_geral.txt')){
            $dadosAtuais = $this->capturar();
            $dadosAtuais .= "\n\n".$data;
            $this->gravarArquivos($dadosAtuais);
        } else {
            $this->gravarArquivos($data);
        
        }
        return $data; 
               
    }
    
    public function gravarArquivos($data){
        
    file_put_contents($this->caminho.'/log_geral.txt', $data);  
  
    }
    
    public function capturar(){
        
    $dados = file_get_contents($this->caminho.'/log_geral.txt');  
    return $dados;
    }
    public function obterIp(){
        

    $pegar_ip = $_SERVER["REMOTE_ADDR"];
    $ip_permitido = "ip_permitido";

    if ($pegar_ip == $ip_permitido) 
    {
       echo 'Ip Permitido!';
    } 
    else 
    { 
        header("Location: url");
    }
  
    }
    
    
}
