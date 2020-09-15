<?php 
header("Conttent-type:text/html;charset=utf-8");

try {
    $pdo = new PDO(
        "mysql:host=mariadb;dbname=test",
        'demo',
        '123456'
    );
} catch (PDOException $e) {
    die($e->getMessage());
}

die('pass');
