<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "00000";
$db_select = "SUCCULENTS_PLANT";

//建立資料庫連線物件
$dsn = "mysql:host=" . $db_host . ";dbname=" . $db_select;
//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);

// ---------------------------------------
$classNo = $_POST["classNo"];

$sql = 'SELECT *
     from HANDCLASS
     where handClassNO = ?';

$statement = $pdo->prepare($sql);

$statement->bindValue(1, $classNo);
$statement->execute();

$data = $statement->fetch();
// ---------------------------------------

echo json_encode($data);
