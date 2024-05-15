<?php
$server_name = "localhost";
$username = "root";
$password = "00000";
$db_name = "SUCCULENTS_PLANT";
$conn = new mysqli($server_name, $username, $password, $db_name);

// $server_name = 'localhost';
// $username = 'albert_huang';
// $password = 'albert';
// $db_name = 'SUCCULENTS_PLANT';

// $conn = new mysqli($server_name, $username, $password, $db_name);

if (!empty($conn->connect_error)) {
  die('資料庫連線錯誤:' . $conn->connect_error);
}

$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone ="+8:00"');

$account = $_POST['account'];
$password = $_POST['password'];

// echo $account;
// echo $password;

$sql = "select * from MEMBER where memberAccount= '$account' and memberPassword='$password '";
// echo $sql;
// exit();
// $sql = sprintf(
//     "select * from MEMBER where memberAccount='%s' and memberPassword='%s'",
//     $account,
//     $password
//   );
$result = $conn->query($sql);
$row =   $result->fetch_all();

//print_r($row);

if (count($row) > 0) {
  // print_r($row);
  // exit();
  foreach ($row as $data) {
    $memberNO = $data[0];
    break;
  }

  //set session
  session_start();
  $_SESSION["memberNO"] = $memberNO;


  header("Location:./member.php");
} else {
  //echo '登入失敗！';
  header("Location:./login.php");
  //echo $conn->error;
}
