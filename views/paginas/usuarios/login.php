<main>

    <form action="<?php echo HOME_URI;?>usuario/autenticar" method="POST">
    <div class="form-group">
        <label for="InputEmail">Email address</label>
        <input type="email"  name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Informe o email">
        <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com mais ninguém.</small>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="senha" class="form-control" id="inputPassword1" placeholder="Senha">
    </div>
    
    <button type="submit" class="btn btn-primary">Autenticar</button>
    </form>
</main>