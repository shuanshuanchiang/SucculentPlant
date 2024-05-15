<?php

$sql = "SELECT * FROM SUCCULENTS_PLANT.KNOWLEDGE";

function getPDO()
{
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "00000";
    $db_select = "SUCCULENTS_PLANT";

    $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_select;

    $pdo = new PDO($dsn, $db_user, $db_pass);

    return $pdo;
}


$statement = getPDO()->prepare($sql);

$statement->execute();
$data = $statement->fetchAll();


foreach ($data as $index => $row) {

    echo "<a href='blog_" . $row['knowledgeType'] . ".html?id=" . $row['knowledgeNO'] . "'>
                        <div class='blog_word'>
                            <img src='./img/blogall/" . $row['knowledgeOutPic'] . "'>
                            <p>" . $row['knowledgeTitle'] . "</p>
                        </div>
                </a>";
}
