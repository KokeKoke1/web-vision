<?php

require_once("connect-mysql.php");
session_start();

if ($_SESSION["nick"] != "") {
    if (isset($_GET["oldpassword"]) && isset($_GET["newpassword"]) && isset($_GET["renewpassword"])) {
        $password = $_GET["oldpassword"];
        $nick = $_SESSION["nick"];
        $result = $mysql["login"]->query("SELECT hashedPassword FROM `user_profiles` WHERE `lastNickname` = '$nick'");
        if (mysqli_num_rows($result) > 0) {
            $salt = mysqli_fetch_assoc($result);
            $salt = explode("$", $salt["hashedPassword"]);
            $hashedPassword = hash("sha256", hash("sha256", $password).$salt[1]);
            if ($hashedPassword == $salt[2]) {
                if ($_GET["newpassword"] == $_GET["renewpassword"]) {
                    // forcechangepassword $nick $_GET["newpassword"]
                    $x = "yes";
                    echo json_encode($x);
                } else {
                    $x = "null";        
                    echo json_encode($x);
                }
            } else {
                $x = "null";
                echo json_encode($x);
            }
        } else {
            $x = "null";        
            echo json_encode($x);            
        }
    } else {
        $x = "null";        
        echo json_encode($x);
    }
}                                        
