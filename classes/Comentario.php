<?php

class Comentario extends DataBase{
    /** 
     * @var int Identificador 
     * @access private
    */
    private $id;
    /** 
     * @var string Comentário
     * @access private
    */
    private $comentario;
    /** 
     * @var object Notícia
     * @access private
    */
    private $noticia;
    /** 
     * @var string Nome do usuário
     * @access private
    */
    private $nomeUsuario;

    /*public function __construct(){
        $this->id=$id;
        $this->comentario=$comentario;
        $this->noticia=$noticia;
        $this->nomeUsuario=$nomeUsuario;
    }*/

    public function index(){
        $this->listar();
    }

    public function listar($id){
        $sql="SELECT comentario, noticia_id, nome_usuario FROM comentario WHERE noticia_id=".$id;
       
        $resultado=$this->query($sql);
        $comentarios=null;
        while($comentario= $resultado->fetch(PDO::FETCH_OBJ)){
            $comentarios[]=$comentario;
        }

        return $comentarios;
    }

}