<?php

require_once("app/functions/main.php");
session_start();

$main = new Main;
$main->loadHeader();

if(empty($_GET)) {
    $main->loadNavbar(0);
    $main->loadSiteMain();
} else {
    if(isset($_GET["logout"])) {
        session_destroy();
        header("Location: ?");
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-1000);
                setcookie($name, '', time()-1000, '/');
            }
        }
    } else if(isset($_GET["profile"])) {
        if (isset($_SESSION["nick"])) {
            $main->loadNavbar(1);
            $main->loadNavigation("Profil", "", "");
            $main->loadProfile($_SESSION["nick"]);
        } else { header("Location: ?login"); }

    } else if(isset($_GET["login"])) {
        if (!isset($_SESSION["nick"])) {
            $main->loadNavbar(1);
            $main->loadNavigation("Login", "", "");
            $main->loadLogin();
        } else { header("Location: ?profile"); }

    } else if(isset($_GET["sklep"])) {
        $main->loadNavbar(1);
        $main->loadNavigation("Sklep", "", "");
        if (isset($_COOKIE["nick"])) {
            $main->loadShop();
        } else {
            $main->loadShopNick();
        }
    } else if(isset($_GET["regulamin"])) {
        $main->loadNavbar(1);
        $main->loadNavigation("Regulamin", "", "");
        $main->loadRegul();
    } else if(isset($_GET["faq"])) {
        $main->loadNavbar(1);
        $main->loadNavigation("FAQ", "", "");
        $main->loadFaq();
    } else if(isset($_GET["404"])) {
        $main->loadNavbar(1);
        $main->loadNavigation("Error 404", "", "");
        $main->createNotFindSite();
    } else if(isset($_GET["rangi"])) {
        $main->loadNavbar(1);
        $main->loadNavigation("Opis rang", "", "");
        $main->loadRank();
    } else if(isset($_GET["news"])) {
        $main->loadNavbar(1);
        if(!isset($_GET["title"])) { $main->loadNavigation("Nowości", "", ""); $main->loadForums(); } else { $main->loadNavigation("Nowości", "news", $_GET["title"]); $main->loadArticle($_GET["news"], $_GET["title"]); }
        
    } else {
        header("Location: ?404"); 
    }
}

$main->loadFooter();

?>