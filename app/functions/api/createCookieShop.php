<?php
if (isset($_GET['nick'])) {
    $nick = $_GET['nick'];
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time()-1000);
            setcookie($name, '', time()-1000, '/');
        }
    }
    $setDomain = ($_SERVER['HTTP_HOST']) != "visionmc.pl" ? "visionmc" : false;
    setcookie("nick", $nick, time()+3600, '/', $setDomain, 0);

    $x = "yes";
    echo json_encode($x);
}
?>