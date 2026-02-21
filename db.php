<?php

/* =========
 DB Connect
============ */

$env = parse_ini_file(__DIR__ . '/.env');

$host     = $env['DB_HOST'];
$db       = $env['DB_NAME'];
$user     = $env['DB_USER'];
$password = $env['DB_PASS'];

$connect = "mysql:host={$host};dbname={$db};charset=utf8mb4";
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($connect, $user, $password, $options);
