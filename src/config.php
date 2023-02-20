<?php
//Conexão com o banco de dados
//Constantes para armazenamento das variáveis de Conexão
define('HOST', '192.168.0.4');
define('PORT', '5432');
define('DBNAME', 'crud_db');
define('USER', 'postgres');
define('PASSWORD', 'postgres');

try {
    $dsn = new PDO ("pgsql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME . ";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
    echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' . $e->getMessage();
}
