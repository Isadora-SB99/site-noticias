<main>
    <form action="<?php echo HOME_URI;?>usuario/salvar" method="POST" class="form">
        <fieldset>
            <legend>Cadastro de usuários</legend>
            <input type="hidden" name="id" />
            <div class="input-group">
                <span class="input-group-addon">Nome</span>
                <input type="text" class="form-control" name="nome" 
                 placeholder="Nome do usuário"/>
            </div>
            <div class="input-group">
                <span class="input-group-addon">Email</span>
                <input type="text" class="form-control" name="email" 
                 placeholder="Email"/>
            </div>
            <div>
                <input type="submit" class='btn btn-primary btn-block' name="enviar" value="Enviar" />
            </div>
        </fieldset>
    </form>

</main>