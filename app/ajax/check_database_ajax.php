<?php
$data = json_decode($_POST['firstUse']);
$data = (array)$data;
$dbHost = $data['dbHost'];
$dbName = $data['dbName'];
$dbUser = $data['dbLogin'];
$dbPassword = $data['dbPassword'];

$connection = [];

try {
    $pdo = new PDO('mysql:host='.$dbHost.';dbname='.$dbName.';charset=utf8', $dbUser, $dbPassword);
    $pdo->query('SET NAMES utf8');
    $pdo->query('SET CHARACTER_SET utf8_unicode_ci');
    $connection['status'] = 'success';
    $connection['message'] = 'Połączenie z bazą danych zakończyło się pomyślnie!';
} catch (PDOException $e) {
    $connection['status'] = 'fail';
    $connection['message'] = 'Niestety, dane są nieprawidłowe, spróbuj ponownie.';
}
echo json_encode($connection);