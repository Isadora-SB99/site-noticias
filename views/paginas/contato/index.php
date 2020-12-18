<meta charset="utf-8">
<main>
<div class="wrap">
	
	<h1 class="entry-title">Contato</h1>
	<?php
		if (isset($_POST["enviar"])) {
			$str=$_POST['nome']."|".$_POST['email']."|".$_POST['assunto']."|".$_POST['mensagem']."\n";
			if ($file=fopen("email.txt", 'a')) {
				if (fwrite($file, $str)) {
					echo "Email enviado com sucesso!</br>";
				}else{
					echo "Falha ao enviar email";
				}
				fclose($file);
			}
		}
	?>
	<p>Ficou com alguma dúvida ou tem alguma sugestão? Entre em contato conosco:</p>
	<form name="form-usuario" method="POST">
		<input type="text" name="nome" placeholder="Nome" id="nome"> </br></br>
		<input type="email" name="email" placeholder="Email" id="email"> </br></br>
		<input type="text" name="assunto" placeholder="Assunto" id="assunto"> </br></br>
		<!--<input type="text "name="mensagem" placeholder="Mensagem" id="mensagem"> </br></br>!-->
		<textarea cols="50" rows="10" name="mensagem" id="mensagem">Mensagem</textarea> </br></br>
		<input type="submit" name="enviar" placeholder="enviar">
	</form>

<style type="text/css">
	#nome{
		width: 50%;
		height: 30px;
	}
	#email{
		width: 50%;
		height: 30px;
	}
	#assunto{
		width: 50%;
		height: 30px;
	}
	#mensagem{
		width: 50%;
		height: 70px;

	}
</style>

	<?php
		/*
		$to = 'isadora-bellaguarda@educar.rs.gov.br';
		$subject = $_POST['assunto'];
		$message = $_POST['mensagem']
		//$message = wordwrap($message,70);
		$headers = 'From: '.$_POST['email'] . "\r\n" .
		'Reply-To: isadora.cimol.2907@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		email($to, $subject, $message);*/


/*
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];
		$mensagem = $_POST['mensagem'];

		$enviar_para = "isadora-bellaguarda@educar.rs.gov.br";
  $destino = $enviar_para;
  $assunto;

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $mensagem, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }*/
	?>
	


</div>
</main>