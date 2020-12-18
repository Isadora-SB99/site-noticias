<html>
<main>

    <h1>Insira uma nova notícia</h1>

    <form method="POST" class="form"><!--action="<?php //echo HOME_URI;?>/classes/Noticia/listar"!-->
        <input type="hidden" name="id" />
        <input type="text" name="titulo" placeholder="Título"> </br></br>
        <textarea cols="50" rows="10" name="descricao" id="descricao">Descrição</textarea> </br></br>
        <!--<input type="date" name="data" placeholder="Data"> </br></br>!-->
        <!--<input type="hidden" name="data" >!-->
        <input type="hidden" name="usuario" placeholder="Usuário"> </br></br>
        <!--<input type="image" name="imagem" placeholder="Imagem" id="img"> </br></br>!-->
        <input type="submit" name="enviar" placeholder="Enviar" id="enviar"> </br></br>
    </form>

    <style type="text/css">
    input{
        width: 50%;
        height: 30px;
    }

    #descricao{
        width: 50%;
        height: 70px;
    }

    #img{
        width: 71%;
    }

    #enviar{
        width: 10%;
    }
</style>

<?php
    /*$stmt = "INSERT INTO noticia (id, titulo, descricao, data, usuario, imagem) VALUES (".$_POST['id'].", ".$_POST['titulo'].", ".$_POST['descricao'].", now(), ".$_SESSION['usuario'].", ".$_POST['imagem'].")";

    //".$_POST['data']." PARA SUBSTITUIR O NOW SE DER ERRADO

    $noticia=$stmt;*/
    if (isset($_POST['enviar'])) {

        $novaNoticia= "INSERT INTO noticia (id, titulo, descricao, data, usuario, imagem) VALUES (".$_POST['id'].", ".$_POST['titulo'].", ".$_POST['descricao'].", now(), ".isset($_SESSION['usuario']).")";
    }
    //, ".$_POST['imagem']."
    
    require PATH .'/views/tema/footer.php';
    
?>
</main>
</html>