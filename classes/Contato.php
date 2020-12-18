<?php

	//require PATH .'/views/tema/header.php';

	class Contato extends DataBase{

		public function index() {
						
			/** Carrega os arquivos do view **/
				
			require PATH .'/views/tema/header.php';
			       	
			require PATH .'/views/tema/nav.php';
			require PATH .'/views/tema/msg.php';
						
			require PATH .'/views/paginas/contato/index.php';
						
			require PATH .'/views/tema/footer.php';
					
		} // index
		/*public function contato(){
			echo "Email: candido.cimol@gmail.com </br>
			Telefone: 3542-1309";
		}*/
		
		/*public function teste(){
			echo "Teste";
		}*/

		/*public function teste_par($val){
		    echo $val;
		}*/
	}

	
	
	//require PATH .'/views/tema/footer.php';

?>