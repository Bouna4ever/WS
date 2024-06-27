<?php
$config = [
    'db' => [
        'host' => '192.168.61.220',
        'dbname' => 'api_magasin',
        'user' => 'root',
        'password' => 'password',
        'port' => '3309'
    ],
];

try {
    $pdo = new PDO(
        "mysql:host=" . $config['db']['host'] . ";port=" . $config['db']['port'] . ";dbname=" . $config['db']['dbname'],
        $config['db']['user'],
        $config['db']['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}