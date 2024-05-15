<?php 

include("./UtilClass.php");
$Util = new UtilClass();

// session_start();
// $memberNO = $_SESSION["memberNO"];
$data = json_decode(file_get_contents("php://input"));
    // $all_data = $data -> allData;
    $order_data = $data -> order_all;
    $member_data = $data -> member_all;
    $pro_data = $data -> pro_all;
    $cus_data = $data -> cus_all;
    $hand_data = $data -> hand_all;


print_r ($order_data);
print_r ($member_data);
print_r ($pro_data);
print_r ($cus_data);
print_r ($hand_data);

// 訂單資料
foreach($order_data as $index => $item){
    // echo $item->order_id;
    // echo $item->memberPassword;
    $orderNO = $item->order_id; //訂單編號
    $orderTotal = $item->order_totale; //總金額
    $orderName = $item->order_name; //姓名
    $orderCellPhone = $item->order_memberCellPhone;//電話
    $orderAddress = $item->order_memberAddress; //地址
     
}
$orderPayStatus =1;   

// 會員資料
foreach($member_data as $index => $item){
    $memberNO = $item->memberNO; //會員ID
}
// insert訂單
$sql = "INSERT INTO SUCCULENTS_PLANT.ORDER
          (orderNO, orderTotal, orderName, orderCellPhone, orderAddress,orderPayStatus, FK_ORDER_memberNO, orderDate ) 
          VALUES (  ?,  ?,  ?,  ?,  ?,  ?,  ?, NOW() )";
//   $statement = $Util->getPDO()->prepare($sql);
  $statement = $Util->getPDO()->prepare($sql);

  $statement->bindValue(1, $orderNO);
  $statement->bindValue(2, $orderTotal);
  $statement->bindValue(3, $orderName);
  $statement->bindValue(4, $orderCellPhone);
  $statement->bindValue(5, $orderAddress);
  $statement->bindValue(6, $orderPayStatus);
  $statement->bindValue(7, $memberNO); 
  $statement->execute();


//   訂單明細
// 商品
foreach($pro_data as $index => $item):
    $pro_id = $item->pro_id; //產品ID
    $pro_count =$item->pro_count; //產品數量

    print_r($item);
    $pro_card = false;
    if(isset($item->pro_cardcustom)){
        $pro_card = $item->pro_cardcustom;//有無卡片
    }
    
    //------ 
    if($pro_card == true):
        $pro_cardReceivePeople = $item->pro_cardReceivePeople; //卡片收禮人
        $pro_cardSendText = $item->pro_cardSendText; //卡片內容
        $pro_cardSendPeople = $item->pro_cardSendPeople;//卡片送禮人
        $sql = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL,SUCCULENTS_PLANT.CARD
        (FK_ORDER_DETAIL_productNO, number, cardReceivePople, cardContentText, cardSendPople ) 
        VALUES (  ?,  ?,  ?,  ?,  ? )
        where FK_ORDER_DETAIL_orderNO = ?";
    
  $statement = $Util->getPDO()->prepare($sql);

    
      $statement->bindValue(1, $pro_id);
      $statement->bindValue(2, $pro_count);
      $statement->bindValue(3, $pro_cardReceivePeople);
      $statement->bindValue(4, $pro_cardSendText);
      $statement->bindValue(5, $pro_cardSendPeople);
      $statement->bindValue(6, $orderNO); 
      $statement->execute();
    
    else:


        $sql2 = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL
        (FK_ORDER_DETAIL_productNO) 
        VALUES (:pro_id)
        where FK_ORDER_DETAIL_orderNO = :orderNo";
    // number
    // pro_count
    // $statement = $Util->getPDO()->prepare($sql);
    echo $pro_id.PHP_EOL;
    echo $orderNO .PHP_EOL;
    echo $pro_id.PHP_EOL;
    $input2 = array(
        ':pro_id'=>$pro_id,
        // ':pro_count'=>$pro_count,
        ':orderNO'=>$orderNO
    );
    $statement2 = $Util->getPDO()->prepare($sql2);
    
    // $statement->bindValue(1, $pro_id);
    // $statement->bindValue(2, $pro_count);
    // // echo $orderNO;
    // $statement->bindValue(3, $orderNO); 
    $statement2->execute($input2);
    
    endif;
endforeach;




// 客製
// foreach($hand_data as $index => $item){
//     $cardReceivePeople = $item->cardReceivePeople; //卡片收禮人
//     $card = $item->card; //卡片內容
//     $cardSendPeople = $item->cardSendPeople;//卡片送禮人
//     $cus_card = $item->confirmCheck;
// }
// $cus_card
// if($cus_card == true){
//     $sql = "INSERT INTO SUCCULENTS_PLANT.CUSTOM_PLANT,SUCCULENTS_PLANT.CARD, SUCCULENTS_PLANT.CUSTOM_PLANT
//     (FK_ORDER_DETAIL_customPlantNO, customPlantNO, cardReceivePople, cardContentText, cardSendPople ) 
//     VALUES (  ?,  ?,  ?,  ?,  ? )
//     where FK_ORDER_DETAIL_orderNO = ?";

//   $statement = $Util->getPDO()->prepare($sql);
//   $statement = $Util->getPDO()->prepare($sql);

//   $statement->bindValue(1, $pro_id);
//   $statement->bindValue(2, $pro_count);
//   $statement->bindValue(3, $pro_cardReceivePeople);
//   $statement->bindValue(4, $pro_cardSendText);
//   $statement->bindValue(5, $pro_cardSendPeople);
//   $statement->bindValue(6, $orderNO); 
//   $statement->execute();

// }else{
//     $sql = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL
//     (FK_ORDER_DETAIL_productNO, number) 
//     VALUES (  ?,  ?,  ?)
//     where FK_ORDER_DETAIL_orderNO = ?";

// $statement = $Util->getPDO()->prepare($sql);
// $statement = $Util->getPDO()->prepare($sql);

// $statement->bindValue(1, $pro_id);
// $statement->bindValue(2, $pro_count);
// $statement->bindValue(3, $orderNO); 
// $statement->execute();

// }

// 課程
// foreach($cus_data as $index => $item){
//     $handClassNO = $item->handClassNO; //課程ID
//     $handClassDate =$item->handClassDate; //課程日期
//     $handClassPeople = $item->handClassPeople; //課程人數
// }
// insert訂單明細
// $sql = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL,
//           (orderNO, orderTotal, orderName, orderCellPhone, orderAddress,orderPayStatus, FK_ORDER_memberNO, orderDate ) 
//           VALUES (  ?,  ?,  ?,  ?, ?, ?, ?, NOW() )";
// //   $statement = $Util->getPDO()->prepare($sql);
//   $statement = $Util->getPDO()->prepare($sql);

//   $statement->bindValue(1, $orderNO);
//   $statement->bindValue(2, $orderTotal);
//   $statement->bindValue(3, $orderName);
//   $statement->bindValue(4, $orderCellPhone);
//   $statement->bindValue(5, $orderAddress);
//   $statement->bindValue(6, $orderPayStatus);
//   $statement->bindValue(7, $memberNO); 
//   $statement->execute();

 




    // $order_id= $data -> orderId;
    // $constants = get_defined_constants(true);
    // $json_errors = array();

    // foreach ($all_data as $index => $value) {
    //  echo $index;
    // }

    // foreach($all_data as $index => $row) {

        // $orderNO = $all_data[$index];
//         // $orderTotal = $_POST["knowledgeTypeTitle"];
//         // $orderName = $_POST["knowledgeTypeContent01"];
//         // $orderCellPhone = $_POST["knowledgeTypeContent02"];
//         // $orderDate = $_POST["knowledgeTypeContent03"];
    // }
// echo $all_data;

?>

