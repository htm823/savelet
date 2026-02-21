<?php
require 'db.php';

$name = $_POST['name'];
$url  = $_POST['url'];

$sql  = 'INSERT INTO savelet (name, url) VALUES (:name, :url)';
$stmt = $pdo->prepare($sql);
$stmt->execute([
	':name' => $name,
	':url'  => $url
]);

header('Location: index.php');
