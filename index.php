<?php
session_start();
include "config.php";

/*Função para realizar o carregamento automático das classes */
spl_autoload_register(function($class){
    include "./classes/".$class.".php";
});

if(isset($_GET['path'])){
    $path=rtrim($_GET['path'],"/");

    $path=explode("/", $path);
    
    $objeto=ucfirst($path[0]);
   
    $objeto=new $objeto();
    if(isset($path[1])){
        
        if(isset($path[2])){
            $objeto->{$path[1]}($path[2]);
        }else{
            $objeto->{$path[1]}();
        }
    }else{
        $objeto->index();
    }

}else{
    $objeto=new Inicio();
    $objeto->index();
}
