<?php

//========================================

$server_name = "localhost";
$username = "root";
$password = "00000";
$db_name = "SUCCULENTS_PLANT";
$conn = new mysqli($server_name, $username, $password, $db_name);

if (!empty($conn->connect_error)) {
    die('資料庫連線錯誤:' . $conn->connect_error);
}

$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone ="+8:00"');
//=========================================
// $memberNO = $_SESSION["memberNO"];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$address = $_POST['address'];
// echo $memberNO;
// echo $pass;
// echo $phone;
// echo $address;

if ($pass) {
    session_start();
    $memberNO = $_SESSION["memberNO"];
    $sql = "update member set memberPassword='$pass' where memberNO = '$memberNO '";
}
if ($phone) {
    session_start();
    $memberNO = $_SESSION["memberNO"];
    $sql = "update member set memberCellPhone='$phone'where memberNO = '$memberNO ' ";
}
if ($address) {
    session_start();
    $memberNO = $_SESSION["memberNO"];
    $sql = "update member set memberAddress='$address' where memberNO = '$memberNO '";
}


$result = $conn->query($sql);
if ($result) {
    header('Location:./member.php');
}
