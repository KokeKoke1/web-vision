<?php

require_once("connect-mysql.php");
session_start();

$input = json_decode(file_get_contents('php://input'), true);
$data = json_decode($input["data"]);

if ($_SESSION["nick"] != "") {
    $nick = $_SESSION["nick"];
    if (strpos($data->{"email"}, "@")) {
        $x["email"] = "yes";
        $email = $data->{"email"};
        $mysql["login"]->query("UPDATE `user_profiles` SET `mailAddress` = '$email' WHERE `lastNickname` = '$nick';
        ");
    } else {
        $x["email"] = "no";
    }
    if (strpos($data->{"discord"}, "#")) {
        $x["discord"] = "yes";
        $discord = $data->{"discord"};
        $mysql["global"]->query("UPDATE `Statystyki` SET `Discord` = '$discord' WHERE `Nick` = '$nick';");
    } else {
        $x["discord"] = "no";
    }
    echo json_encode($x);
}
