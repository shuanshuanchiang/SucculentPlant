<?php
  

        //資料庫-------------------------------------------
        include("./Conn.php");
        //建立SQL語法
        $sql = "SELECT orderDate,orderNo,orderMethod,orderTotal,orederStatus FROM SUCCULENTS_PLANT .ORDER ";
        //執行
        $statement  = $pdo->prepare($sql);
      //   $statement->bindValue(1,"%".$ID."%");
        $statement->execute();
        //抓出全部且依照順序封裝成一個二為陣列
        $data = $statement->fetchAll();
      echo '<ul class="mem_order_top">';
        
      echo '<li class="mem_time">';
        echo '<div class="tit">訂單時間';
        echo '</div>';
        foreach($data as $index =>$row){    
          echo '<span>';  
          echo $row["orderDate"];
          echo '</span>';
          echo '</br>';
          };
          echo '</li>';   

          echo '<li class="mem_no">';
            echo '<div class="tit">訂單編號';
            echo '</div>';
            foreach($data as $index =>$row){    
              echo '<span>';
              echo $row["orderNo"];
              echo '</span>';
              echo '</br>';
            };
        echo '</li>';  

        echo '<li class="mem_pay">';
        echo'<div class="tit">付款方式';
        echo '</div>';
        foreach($data as $index =>$row){    
          echo '<span>';
          echo $row["orderMethod"];
          echo '</span>';
          echo '</br>';
        };
        echo '</li>';

      echo '<li class="mem_totle">';
      echo'<div class="tit">訂單金額';
      echo '</div>';
      foreach($data as $index =>$row){    
          echo '<span>';
          echo '$'.$row["orderTotal"];
          echo '</span>';
          echo '</br>';
        };
        echo '</li>';
  

    echo '<li class="mem_status">';
    echo'<div class="tit">訂單狀態';
    echo '</div>';  
    foreach($data as $index =>$row){    
        echo '<span>';
        echo $row["orederStatus"];
        echo '</span>';
        echo '</br>';
      };
      echo '</li>';
 

                // <li class="mem_no">
                //     <div class="tit">訂單編號</div>

                // </li>

                // <li class="mem_pay">
                //     <div class="tit">付款方式</div>

                // </li>

                // <li class="mem_totle">
                //     <div class="tit">訂單金額</div>

                // </li>

                // <li class="mem_status">
                //     <div class="tit">訂單狀態</div>

                // </li>

        echo '</ul>';

        echo'<div class="mem_open">訂單明細';
        echo' <i class="fas fa-plus">';
        echo'</i>';
        echo'</div>';
      //   foreach($data as $index =>$row){
      //    echo "<ul>";  
      //    echo '<li class="mem_time">
      //    <div class="tit">訂單時間</div>'.$row["orderDate"].'</li>';       
      //    echo '<li>'.$row["orderNo"].'</li>';       
      //    echo '<li>'.$row["orderMethod"].'</li>';       
      //    echo '<li>'.$row["orderTotal"].'</li>';       
      //    echo '<li>'.$row["orederStatus"].'</li>';       
      //    echo "</ul>";
      // }
    
?>

