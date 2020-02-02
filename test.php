<?php
$dbHost = 'asd';
$dbName = 'asd';
$dbUser = 'asd';
$dbPassword = 'asd';
$fileContent = '<?php
    DEFINE("DB_HOST", \'' .$dbHost .'\');
    DEFINE("DB_NAME", \'' .$dbName .'\');
    DEFINE("DB_USER", \'' .$dbUser .'\');
    DEFINE("DB_PASSWORD", \'' .$dbPassword .'\');
';


$source = "configs/besmartcms-config.php";
$configFile = fopen($source, "w");
fwrite($configFile, $fileContent);
fclose($configFile);
