<?php
include('./loginCheck.php');

//取得POST過來的值

$handClassNO = $_POST["handClassNO"];
$handClassPeople = $_POST["handClassPeople"];
$handClassNowPeople = $_POST["handClassNowPeople"];

//返回訊息文字
$message = "修改成功!";

//建立SQL
$sql = "UPDATE HANDCLASS 
            set 
            handClassPeople = ?,  handClassNowPeople = ?
            where handClassNO = ?";

//執行
$statement = $pdo->prepare($sql);

//給值    
$statement->bindValue(1, $handClassPeople);
$statement->bindValue(2, $handClassNowPeople);
$statement->bindValue(3, $handClassNO);
$statement->execute();

//導頁
//header("Location: Index.php");    
