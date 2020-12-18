<?php

	require PATH .'/views/tema/header.php';
			       	
	require PATH .'/views/tema/nav.php';
	require PATH .'/views/tema/msg.php';

?>

	<div class="panel panel-primary">
		<div class="panel-heading"><h2><?php echo $noticia->titulo?></h2></div>
			<?php echo ($noticia->descricao)?>
				<div class="data">
				<span class="label label-primary"><?php echo $noticia->data?></span>
				<span class="label label-primary"><?php echo "  Por:".$noticia->nome_usuario?></span>
			</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h5 class="panel-title">Cometarios</h5>
		</div>
		<?php
			if($noticia->comentarios){
				foreach ($noticia->comentarios AS $comentario) {
					
		?>

			<div class="coments">
				<p class="nome-user"><?php echo $comentario->nome_usuario?></p>
				<p class="coment-user"><?php echo $comentario->comentario?></p>
			</div>

		<?php	
				}
			}
		?>
		<form class="form" method="POST" action="<?php echo HOME_URI;?>noticia/comentar">
			<input type="hidden" name="noticia_id" value="<?php echo $noticia->id?>">
			<input type="hidden" name="nome_usuario" value="<?php echo isset($_SESSION['usuario'])?$_SESSION['usuario']->nome:"Anonimo"?>">
			<div class="form-group">
				<input type="text" class="form-control" name="comentario" placeholder="Adicione um comentario">
			</div>
		</form>

<?php

	require PATH .'/views/tema/footer.php';

?>