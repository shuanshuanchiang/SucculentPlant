<?php

$server_name = 'localhost';
$username = 'root';
$password = '00000';
$db_name = 'SUCCULENTS_PLANT';

$conn = new mysqli($server_name, $username, $password, $db_name);

if (!empty($conn->connect_error)) {
  die('資料庫連線錯誤:' . $conn->connect_error);
}

$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone ="+8:00"');

if (
  empty($_POST['name']) ||
  empty($_POST['account']) ||
  empty($_POST['password']) ||
  empty($_POST['address']) ||
  empty($_POST['phone'])
) {
  header('Location:./login.php');
  echo '請輸入完整訊息';
  die();
}

$name = $_POST['name'];
$account = $_POST['account'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['phone'];
//下query找出結果，沒結果印出錯誤
$sql = "INSERT INTO `MEMBER` (`memberAccount`, `memberPassword`, `memberName`, `memberCellPhone`, `memberAddress`) 
VALUES ('$account', '$password', '$name', '$phone', '$address');";
// $sql = sprintf(
// "insert into MEMBER(memberPassword,memberCellPhone,memberAddress)values('%s')",
// $pass,$phone,$address
// ) ;
// echo 'SQL:' . $sql ."<br>";
$result = $conn->query($sql);
if (!$result) {
  die($conn->error);
}

// echo '新增成功';


header("Location:./login.php")

?>

<!-- <a href="index.php">go back</a> -->