<?php

require('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

try {
    $conexao = new PDO(
    "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_NAME'),
    getenv('DB_USER'),
    getenv('DB_PASSWORD')
  );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit(); // Encerra o script em caso de falha na conexão
}
