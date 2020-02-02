<?php
$data = json_decode($_POST['firstUse']);
$data = (array)$data;
$finalStep = [];

foreach ($data as $item) {
    if (empty($item) || !isset($item)) {
        $finalStep['status'] = 'fail';
        $finalStep['message'] = "Proszę uzupełnić wszystkie pola.";
        echo json_encode($finalStep);
        return;
    }
}

$userFirstName = $data['userFirstName'];
$userLastName = $data['userLastName'];
$userLogin = $data['userLogin'];
$userPassword = $data['userPassword'];
$userEmail = $data['userEmail'];
$dbHost = $data['dbHost'];
$dbName = $data['dbName'];
$dbUser = $data['dbLogin'];
$dbPassword = $data['dbPassword'];

$fileContent = '<?php
    DEFINE("DB_HOST", \'' .$dbHost .'\');
    DEFINE("DB_NAME", \'' .$dbName .'\');
    DEFINE("DB_USER", \'' .$dbUser .'\');
    DEFINE("DB_PASSWORD", \'' .$dbPassword .'\');
';

try {
    $pdo = new PDO('mysql:host='.$dbHost.';dbname='.$dbName.';charset=utf8', $dbUser, $dbPassword);
    $pdo->query('SET NAMES utf8');
    $pdo->query('SET CHARACTER_SET utf8_unicode_ci');
    $pdo->exec('CREATE TABLE besmartcms_users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        login VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        role VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )');
    $query = $pdo->prepare('INSERT INTO besmartcms_users(login, password, first_name, last_name, email, role) 
        VALUES(:login, :password, :first_name, :last_name, :email, :role)');
    $query->bindValue(":login", $userLogin, PDO::PARAM_STR);
    $query->bindValue(":password", password_hash($userPassword), PDO::PARAM_STR);
    $query->bindValue(":first_name", $userFirstName, PDO::PARAM_STR);
    $query->bindValue(":last_name", $userLastName, PDO::PARAM_STR);
    $query->bindValue(":email", $userEmail, PDO::PARAM_STR);
    $query->bindValue(":role", "admin", PDO::PARAM_STR);
    $query->execute();
    $finalStep['status'] = 'success';
    $finalStep['message'] = 'Konfiguracja zakończona pomyślnie!';
} catch (PDOException $e) {
    $finalStep['status'] = 'fail';
    $finalStep['message'] = 'Niestety, wystąpił problem.<br>Błąd: ' . $e->getMessage();
}
$source = "../../../configs/besmartcms-config.php";
$configFile = fopen($source, "w");
fwrite($configFile, $fileContent);
fclose($configFile);


echo json_encode($finalStep);