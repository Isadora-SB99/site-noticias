<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'PATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_PATH', PATH . '/uploads' );

// URL da home
define( 'HOME_URI', 'http://localhost/CS2/aula18-11/PHP-POO2020-main/' );






/**INFORMAÇÕES PARA CONEXAO COM O BANCO DE DADOS */
// SGBD em uso
define( 'SGBD', 'mysql' );

// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );

// Nome do DB
//define( 'DB_NAME', 'mvc' );
define( 'DBNAME', 'news' );
// Usuário do DB
define( 'DBUSER', 'root' );

// Senha do DB
define( 'DBPASSWORD', '' );
// Charset da conexão PDO
define( 'DBCHARSET', 'utf8' );

define('DEFAULT_PASS', '12345');