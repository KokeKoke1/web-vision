<?php

require_once("connect-mysql.php");
session_start();

if ($_GET["function"] == "login") {
    if (isset($_GET["password"]) && isset($_GET["nick"])) {
        $password = $_GET["password"];
        $nick = $_GET["nick"];
        $result = $mysql["login"]->query("SELECT hashedPassword FROM `user_profiles` WHERE `lastNickname` = '$nick'");
        if (mysqli_num_rows($result) > 0) {
            $salt = mysqli_fetch_assoc($result);
            $salt = explode("$", $salt["hashedPassword"]);
            $hashedPassword = hash("sha256", hash("sha256", $password).$salt[1]);
            if ($hashedPassword == $salt[2]) {
                $_SESSION["nick"] = $nick;
                $result = $mysql["login"]->query("SELECT uniqueId FROM `user_profiles` WHERE `lastNickname` = '$nick'");
                $uuid = mysqli_fetch_assoc($result);
                $_SESSION["uuid"] = $uuid["uniqueId"];
                $setDomain = ($_SERVER['HTTP_HOST']) != "visionmc.pl" ? "visionmc" : false;
                setcookie("nick", $nick, time()+3600, '/', $setDomain, 0);
                $x = "yes";
                echo json_encode($x);
            } else {
                $x = "nullPASSWORD";        
                echo json_encode($x);
            }
        } else {
            $x = "nullLOGIN";        
            echo json_encode($x);            
        }
    } else {
        $x = "null";        
        echo json_encode($x);
    }
}                                        
