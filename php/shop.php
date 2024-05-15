<?php
	include("./UtilClass.php");
	$Util = new UtilClass();

  //取得商品--------------------------------------------
  // $CateID = isset($_GET["productNO"]) ? $_GET["productNO"] : "";

  //建立SQL
  $sql = "SELECT * FROM PRODUCT where productStatus =1";
  // if($CateID != ""){
  //     $sql .= " and productNO = ?";
  // }
  // $sql .= " ORDER BY ID DESC";

      //執行
      $statement = $Util->getPDO()->prepare($sql);
    // 參數將SQL指令傳入prepare()方法
    // 

    //若CateID有值才加入SQL WHERE條件式裡
    // if($CateID != ""){
    //   $statement->bindValue(1, $CateID);
    //   }
    //給值
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    // print_r(json_encode($products,320));
    print_r(json_encode($products));
      
    // json_encode將資料轉乘JSON格式
// if($_POST['search']!=''){
//   $search = $_POST['search'];
  

// }
//   $search = "SELECT * FROM PRODUCT where productName like '%?%'";


    // foreach($products as $index => $row){
    //   // 後端取ID,Content
    //   // echo '<div class="3333">' .$row["productName"]."<img src=".$row['productImg01']."></div>";
    //   echo '<div class="3333">' .$row["productName"]."  ></div>";
    
    //   };

      


  // }

?>