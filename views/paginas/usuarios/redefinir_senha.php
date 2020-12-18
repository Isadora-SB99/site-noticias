<main>
    <?php 
    if(!isset($_SESSION['user'])){
        exit(0);
    }
    ?>
    <h1><?php echo $_SESSION['user']["nome"]?> </h1>
    <p>Este deve ser o seu primeiro acesso, portanto defina uma nova senha.</p>
    <form action="<?php echo HOME_URI;?>usuario/salvarSenha" method="POST" class="form">
        <fieldset>
            <legend>Informe a nova senha</legend>
            <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id']  ?>"/>
            
            <div class="input-group">
                <span class="input-group-addon">Senha</span>
                <input type="password" class="form-control" name="senha" placeholder="Nova senha"/>
            </div>
            <div>
                <input type="submit" class='btn btn-primary btn-block' name="enviar" value="Enviar" />
            </div>
        </fieldset>
    </form>

</main>