<?php
/**
 * Conexão - Classe Conexão
 * @author Cândido Farias
 * @since 0.1
 */
class Conexao {
    
    public static $instance;
    
    public static function getInstance() {
        /*Verifica se existe uma instancia do banco de dados */
        if (!isset(self::$instance)) {
            self::$instance = new PDO(
                SGBD.":host=".HOSTNAME."; dbname=".DBNAME, DBUSER, DBPASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".DBCHARSET)
            );
            
        }

        return self::$instance;
    }

}

?>