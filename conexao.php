<?php
     $agora = new DateTime ('now', new DateTimeZone('America/Sao_paulo'));
     $host = 'localhost:3307';
     $db   = 'db_concessionaria';
     $user = 'root';
     $pass = ''; // No XAMPP/WAMP geralmente é vazio
     $charset = 'utf8mb4';

     $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
     $options = [
     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     PDO::ATTR_EMULATE_PREPARES   => false,
     ];

     try {
          $pdo = new PDO($dsn, $user, $pass, $options);
     } catch (\PDOException $e) {
          throw new \PDOException($e->getMessage(), (int)$e->getCode());
     }
?>