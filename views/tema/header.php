
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo HOME_URI;?>views/css/style.css" />
	<title>Criação de Sites</title>
</head>
<body>
	<header>
		<div id="h-logo"><img src="<?php echo HOME_URI ?>/views/images/logo.png" style="height:75px"/></div>
		<div id='h-center'><p>Programação Orientada a Objetos com PHP</p></div>
		<div id='h-user'>
			<?php
				if(isset($_SESSION['user'])){
					echo "<p>".$_SESSION['user']['nome']." 
					     <a href='".HOME_URI."/usuario/logout'>Logout</a>
					</p>";
				}else{
					echo "<a href='".HOME_URI."/usuario/login'>Login</a>";
				}
			?>
		</div>
    </header>