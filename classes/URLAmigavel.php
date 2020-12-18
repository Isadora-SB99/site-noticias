<?php
/**
 * UrlAmigavel - Classe UrlAmigável
 *
 * @author Cândido
 * @version 1.0
 * @since 0.1
 */
class UrlAmigavel extends DataBase
{

	/**
	* Carrega a página "/views/home/index.php"
	* 
	*/
    public function index() {
				
		/** Carrega os arquivos do view **/
	
		require PATH .'/views/tema/header.php';
       	
        require PATH .'/views/tema/nav.php';
        require PATH .'/views/tema/msg.php';
			
        require PATH .'/views/paginas/url_amigavel/index.php';
			
        require PATH .'/views/tema/footer.php';
		
    } // index

    public function teste(){
        echo "Teste";
    }

    public function teste_par($val){
        echo $val;
    }
	
} // class UrlAmigavel