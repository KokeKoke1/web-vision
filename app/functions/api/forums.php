<?php

require_once("connect-mysql.php");
// header("Access-Control-Allow-Origin: *");

$content = trim(file_get_contents("php://input"));
$content = json_decode($content, true);
session_start();

if ($content["option"] == "addComment") {
    $nick = $_SESSION["nick"];
    $date = date("Y-m-d h:i:s");
    $text = $content["text"];
    $id = $content["id"];
    $result = $mysql["www"]->query("INSERT INTO `comments` (`ID`, `POST_ID`, `Autor`, `Date`, `Content`) VALUES (NULL, '$id', '$nick', '$date', '$text');");
    echo json_encode("yes");
}
if ($content["option"] == "getArticles") {
    $result = $mysql["www"]->query("SELECT * FROM `article` ORDER BY `Date` DESC;");
    while ($line = mysqli_fetch_assoc($result)) {
        $row[] = $line;
    }
    echo json_encode($row);
}
else if ($content["option"] == "getArticle") {
    $id = $content["id"];
    $result = $mysql["www"]->query("SELECT * FROM `article` WHERE `ID` = '$id';");
    while ($line = mysqli_fetch_assoc($result)) {
        $row = $line;
    }
    $phpdate = strtotime( $row["Date"] );
    $row["Date"] = date( 'd-m-Y H:m:s', $phpdate );
    echo json_encode($row);
}
else if ($content["option"] == "getComments") {
    $id = $content["id"];
    $result = $mysql["www"]->query("SELECT * FROM `comments` WHERE `POST_ID` = '$id' ORDER BY `Date` DESC;");
    while ($line = mysqli_fetch_assoc($result)) {
        $phpdate = strtotime( $line["Date"] );
        $line["Date"] = date( 'm/d/Y H:m:s', $phpdate );
        $row[] = $line;
    }
    echo json_encode($row);
}

?>