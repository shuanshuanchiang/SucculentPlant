<?php
  

        //資料庫-------------------------------------------
        include("./Conn.php");
        //建立SQL語法
        $sql = "SELECT productName,productPrice,productImg01,productNO from SUCCULENTS_PLANT .PRODUCT p join FAVORITE f on p.PRODUCTNO = f.FK_FAVORITE_productNO";
        //執行
        $statement  = $pdo->prepare($sql);
      //   $statement->bindValue(1,"%".$ID."%");
        $statement->execute();
        //抓出全部且依照順序封裝成一個二為陣列
        $data = $statement->fetchAll();
        foreach($data as $index =>$row){
            echo '<li>';
            echo '<img src="'.$row["productImg01"].'">';
            echo '<p class="name">'.$row["productName"].'</p>';
            echo '<p>$'.$row["productPrice"].'</p>';
            echo '<p class="productNO" style="display:none">'.$row["productNO"].'</p>';
            echo '<div class="mem_love_btn">';
            echo '<i class="fas fa-trash-alt aa" ></i>';
            echo '<div class="gobuy">';
            echo '<a href="custom.html">前往購買</a>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
        };
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

//       <li>
//       <img src="./img/product_1.png" alt="">
//       <p>黃金山脈 – 金晃丸盆栽</p>
//       <p>NT$1850</p>
//       <div class="mem_love_btn">
//           <i class="fas fa-trash-alt"></i>
//           <div class="gobuy">
//               <a href="custom.html">前往購買</a>
//           </div>
//       </div>
//   </li>
    
?>

