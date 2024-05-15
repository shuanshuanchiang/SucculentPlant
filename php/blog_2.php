<?php

$sql = "SELECT * FROM KNOWLEDGE where knowledgeType = 2 and knowledgeNO = ".$_POST['id'];

function getPDO(){
   $db_host = "localhost";
   $db_user = "root";
   $db_pass = "00000";
   $db_select = "SUCCULENTS_PLANT";

   $dsn = "mysql:host=".$db_host.";dbname=".$db_select;

   $pdo = new PDO($dsn, $db_user, $db_pass);

   return $pdo;
}


$statement = getPDO()->prepare($sql);
$statement->execute();
$data = $statement->fetchAll();


foreach ($data as $index => $row) {
    echo"   <div class='ex'></div> <!-- 用這個來推header的間隔 -->
        
    <!-- 麵包屑在這 -->
    <article class='articlebread'>
        <div class='bread'>
            <a href='./main.html'>首頁<a> > <a href='blog_all.html'>多肉知識</a> > <a>" . $row['knowledgeTitle'] ."</a>
        </div>
    </article>




    <!-- article 的內容的安全範圍(1200px)，每個區塊都用一個article包起來 -->
    <article class='blogpage02'>
        <div class='blogpage021200px'>
    <div class='blogpage021200px'>
    <div class='blogpage02title'>
                <img src='img/blog1/" . $row['knowledgeContentPic01'] ."'>
            <div class='blogpage02titletext'>
                <p>
                " . $row['knowledgeContent01'] ."
                </p>
            </div>
        </div>

        <div class='blogpage02title01'>
                <img src='img/blog1/" . $row['knowledgeContentPic02'] ."'>
            <div class='blogpage02title01text'>
                <p>
                ". $row['knowledgeContent02'] ."
                </p>
            </div>

        </div>

        <div class='blogpage02title02'>
                <img src='img/blog1/" . $row['knowledgeContentPic03'] ."'>
            <div class='blogpage02title02text'>
                <p>
                ". $row['knowledgeContent03'] ."
                </p>
            </div>
        </div>
    </div>
    <div class='ex'></div>
    </div>
    </article>";
}
