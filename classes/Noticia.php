<?php

/**
 * Noticia- Classe Noticia
 * @version 1.0
 * @author Cândido
 * @since 0.1
 */
class Noticia extends DataBase{
    /** 
     * @var int Identificador 
     * @access private
    */
    private $id;
    /** 
     * @var string titulo
     * @access private
    */
    private $titulo;
    /** 
     * @var text descricao 
     * @access private
    */
    private $descricao;
    /** 
     * @var date data 
     * @access private
    */
    private $data;
    /** 
     * @var object  usuario 
     * @access private
    */
    private $usuario;
    /** 
     * @var string URL da imagem
     * @access private
    */
    private $imagem;
    /** 
     * @var array Lista de comentários
     * @access private
    */
    private $comentarios;

    public function index(){
        $this->listar();
    }

    public function ver($id){

        $sql="SELECT id, titulo, descricao, DATE_FORMAT(data,'%Y%m%d') AS data, (SELECT nome FROM usuario WHERE id=noticia.usuario_id) AS nome_usuario FROM noticia WHERE id=".$id;
        
        $resultado=$this->query($sql);
        
        $noticia=$resultado->fetch(PDO::FETCH_OBJ);
        
        include "Comentario.php";
        $comentario= new Comentario();
        $noticia->comentarios=$comentario->listar($noticia->id);

        require PATH."/views/paginas/noticias/noticia.php";
    }

    public function listar(){
        require PATH .'/views/tema/header.php';
        require PATH .'/views/tema/nav.php';
        require PATH .'/views/tema/msg.php';

        $noticias=$this->query("SELECT id, titulo, descricao, DATE_FORMAT(data,'%Y%m%d') AS data, (SELECT nome FROM usuario WHERE id=noticia.usuario_id) AS nome_usuario, (SELECT count(comentario.id) FROM comentario WHERE comentario.noticia_id=id) AS num_comentarios FROM noticia ORDER BY id DESC LIMIT 5");

        include PATH."/views/paginas/noticias/noticias.php";

        if(isset($_SESSION['user'])){            
            require PATH."/views/paginas/noticias/novaNoticia.php";
        }else{
            if (!isset($_SESSION['user'])) {
                require PATH .'/views/tema/footer.php';
            }
        }

        
    }//listar

    public function excluir(){

        $sql="DELETE * FROM comentario WHERE comentario.noticia_id=noticia.id AND DELETE * FROM noticia WHERE noticia.id=".$id;
        
        $resultado=$this->query($sql);
        
        $noticia=$resultado->fetch(PDO::FETCH_OBJ);
        
    }//excluir

    public function editar (){
        ?>
        <input type="hidden" name="id" />
        <input type="text" name="titulo" placeholder="Título"> </br></br>
        <textarea cols="50" rows="10" name="descricao" id="descricao">Descrição</textarea> </br></br>
        <input type="hidden" name="usuario" placeholder="Usuário"> </br></br>
        <!--<input type="image" name="imagem" placeholder="Imagem" id="img"> </br></br>!-->
        <input type="submit" name="enviar" placeholder="Enviar" id="enviar"> </br></br>
<?php
        
        $sql="UPDATE * FROM noticia WHERE noticia.id=".$id;
        
        $resultado=$this->query($sql);
        
        $noticia=$resultado->fetch(PDO::FETCH_OBJ);
    }//editar

    

}
?>