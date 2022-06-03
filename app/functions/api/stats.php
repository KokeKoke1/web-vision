<?php

require_once("connect-mysql.php");
session_start();

$nick = $_SESSION["nick"];
$uuid = $_SESSION["uuid"];

$result = $mysql["global"]->query("SELECT * FROM `Statystyki` WHERE Nick = '$nick';");
while ($data = mysqli_fetch_assoc($result)) {
    $stats["SpedzonyCzas"] = $data["SpedzonyCzas"];
    $stats["Osiagniecia"] = $data["Osiagniecia"];
    $stats["Exp"] = $data["Exp"];
}
$stats["SpedzonyCzas"] = str_replace(" and ", " i ", $stats["SpedzonyCzas"]);
$stats["SpedzonyCzas"] = str_replace(" days", "d", $stats["SpedzonyCzas"]);
$stats["SpedzonyCzas"] = str_replace(" day", "d", $stats["SpedzonyCzas"]);
$stats["SpedzonyCzas"] = str_replace(" hours", "h", $stats["SpedzonyCzas"]);
$stats["SpedzonyCzas"] = str_replace(" hour", "h", $stats["SpedzonyCzas"]);
$stats["SpedzonyCzas"] = str_replace(" minutes", "m", $stats["SpedzonyCzas"]);
$stats["SpedzonyCzas"] = str_replace(" minute", "m", $stats["SpedzonyCzas"]);
$stats["SpedzonyCzas"] = str_replace(" seconds", "s", $stats["SpedzonyCzas"]);
$stats["SpedzonyCzas"] = str_replace(" second", "s", $stats["SpedzonyCzas"]);

$x = str_split($uuid);
$uuid = "";
for ($i=0;$i<32;$i++) {
    if ($i == 7 || $i == 11 || $i == 15 || $i == 19) {
        $uuid = $uuid.$x[$i]."-";
    } else {
        $uuid = $uuid.$x[$i];
    }
    
}
$result = $mysql["portfel"]->query("SELECT `COINS` FROM `Coins` WHERE `UUID` = '$uuid';");
while ($data = mysqli_fetch_assoc($result)) {
    $stats["Portfel"] = $data["COINS"];
}

$result = $mysql["mediumhc"]->query("SELECT * FROM `users` WHERE `UUID` = '$uuid';");
while ($data = mysqli_fetch_assoc($result)) {
    $stats["Punkty"] = $data["points"];
    $stats["Zabojstwa"] = $data["kills"];
    $stats["Zgony"] = $data["deaths"];
    $stats["Asysty"] = $data["assists"];
}

$result = $mysql["mediumhc"]->query("SELECT * FROM `schowek` WHERE `UUID` = '$uuid';");
while ($data = mysqli_fetch_assoc($result)) {
    $stats["Koxy"] = $data["koxy"];
    $stats["Refile"] = $data["refile"];
    $stats["Perly"] = $data["perly"];
}

echo json_encode($stats);

?>