<?php
// Configurações do Projeto
define('BASE_URL', 'http://localhost/tilearning');
define('APP_NAME', 'TILearning');

// Configurações do Banco de Dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'tilearning');
define('DB_USER', 'root');
define('DB_PASS', '');

// Conexão PDO
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro de Conexão: " . $e->getMessage());
}
?>