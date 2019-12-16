<?php 
#Local DB Connection
$host = '127.0.0.1';
$db = 'ams';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Remote Databse
#$host = 'remotemysql.com';
 #$db = 'ENjPwibVWg';
#$user = 'ENjPwibVWg';
#$pass = '58kXmtL4c1';
#$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }
    require_once 'crud.php';
    $crud = new crud($pdo);

    $crud->insertUser("Administrator", "Administrator", "admin@localhost.com", "admin", "@dministrat0r", "img/default.png");
    
   
    
?>