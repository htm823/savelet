<?php
require 'db.php';

// CSRF Token
session_start();

if (
	!isset($_POST['csrf_token'], $_SESSION['csrf_token']) ||
	!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
) {
	return;
}

// Validation
$name = trim($_POST['name'] ?? '');
$url  = trim($_POST['url'] ?? '');

if (!$name || !$url) {
	return;
}

$nameLength = mb_strlen($name);
if ($nameLength > 40) {
	return;
}

if (mb_strlen($url) > 2048) {
	return;
}

if (!filter_var($url, FILTER_VALIDATE_URL)) {
	return;
}

$scheme           = parse_url($url, PHP_URL_SCHEME);
$allowedProtocols = ['http', 'https'];
if (!in_array($scheme, $allowedProtocols, true)) {
	return;
}

// DB Insert
$sql  = 'INSERT INTO savelet (name, url) VALUES (:name, :url)';
$stmt = $pdo->prepare($sql);
$stmt->execute([
	':name' => $name,
	':url'  => $url
]);

header('Location: index.php');
exit;
