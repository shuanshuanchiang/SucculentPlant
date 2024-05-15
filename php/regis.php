<?php
    include("./Conn.php");
 
    $account = $_POST["account"];

       //建立SQL
       $sql = "SELECT count(memberAccount) FROM SUCCULENTS_PLANT.MEMBER WHERE memberAccount = ?  GROUP BY memberAccount";
    
       //執行
       $statement = $pdo->prepare($sql);
   
       //給值
       $statement->bindValue(1 , $account); 
       $statement->execute();
       $data = $statement->fetch();

    //   print_r($data);
    //    exit();
       if($data>0){
       
        echo "<script>alert('帳號重複，請重新註冊!'); location.href = '../Login.html';</script>"; 
                  
       }else{

           //    print_r($data);
           //    exit();
           //    $account = $_POST["account"];
           //     $num = "select * from  SUCCULENTS_PLANT.MEMBER where memberAccount='$_POST[account]'";
           //     $result = mysql_query($sql);
           //     $row = mysql_fetch_row($result);
           //     if($row >0)
           
           // {
               
               // echo "<script>alert('帳號重複，請重新註冊!'); location.href = '../Login.html';</script>"; 
               // }      else{
                   
                   //建立SQL
                   $sql = "INSERT INTO SUCCULENTS_PLANT.MEMBER(memberName,memberAccount, memberPassword, memberAddress,memberCellPhone ) VALUES (?,?,?,?,?)";
                   
                   //執行
                   $statement  = $pdo->prepare($sql);
                   
                   //給值
                   $statement->bindValue(1, $_POST["name"]);
                   $statement->bindValue(2, $_POST["account"]);
                   $statement->bindValue(3, $_POST["password"]);
                   $statement->bindValue(4, $_POST["address"]);
                   $statement->bindValue(5, $_POST["phone"]);
                   $statement->execute();
                   
                   echo "<script>alert('加入成功，請重新登入!'); location.href = '../Login.html';</script>"; 
                //    }  
                   
                }
                   ?>