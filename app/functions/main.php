<?php

class Main {
    
    function loadHeader() {
        echo '<!DOCTYPE html / >
        <html lang="pl"><head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">
        
        <meta name="description" content="Jesteśmy społecznością serwerów minecraft non-premium i premium. Dołącz do nas już dziś!">
        <meta name="keywords" content="Minecraft, Bedwars, Deathrun, MediumHc, lobby, serwer Lobby, serwerowy panel, visionmc, vision, najlepszy serwer, discord minecraft">
        <meta name="author" content="Kok3 - VisionMc.pl">

        <meta property="og:site_name" content="VisionMc">
        <meta property="og:url" content="https://visionmc.pl">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Jesteśmy społecznością serwerów minecraft non-premium i premium. Dołącz do nas już dziś!">
        <meta property="og:title" content="VisionMc.pl | Społeczność i serwer minecraft.">

        <link rel="stylesheet" href="app/style.css">
        <link href="app/fontawesome-free-6.0.0-web/css/fontawesome.css" rel="stylesheet">
        <link href="app/fontawesome-free-6.0.0-web/css/brands.css" rel="stylesheet">
        <link href="app/fontawesome-free-6.0.0-web/css/solid.css" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/minecraftia" type="text/css"/>
        
        <script>
        function readCookie(name) {
            var cookiename = name + "=";
            var ca = document.cookie.split(";");
            for(var i=0;i < ca.length;i++)
            {
                var c = ca[i];
                while (c.charAt(0)==" ") c = c.substring(1,c.length);
                if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length,c.length);
            }
            return null;
        }
        </script>
    </head>';
    }
    function loadNavbar($activClass) {
        echo '    
    <script>
        function sendToLogin() {
            window.location.search = "login";
        }
    </script>';
    if ($activClass == 1) {
        echo '<nav class="navbar activex">';
    } else {
        echo '<nav class="navbar">';
    }
    echo '        
    <a href="?" class="nav-logo"><h1>VisionMc</h1></a>
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="?" title="Strona główna" class="nav-link">Strona główna</a>
        </li>
        <li class="nav-item">
            <a href="?sklep" title="Sklep" class="nav-link">Sklep</a>
        </li>
        <li class="nav-item">
            <a href="?rangi" title="Rangi" class="nav-link">Rangi</a>
        </li>
        <li class="nav-item">
            <a href="?news" title="Nowości" class="nav-link">Nowości</a>
        </li>
        <li class="nav-item">
            <a href="?faq" title="Faq" class="nav-link">Faq</a>
        </li>
        <li class="nav-item">
            <a href="?regulamin" title="Regulamin" class="nav-link">Regulamin</a>
        </li>
        <li class="nav-item">';
        if (isset($_SESSION["nick"])) {
            echo '<a href="?profile" style="display: flex; align-items: center;"><img style="max-width: 40px; margin-right: 10px; box-shadow: 0 0 2px gray;" src="https://mc-heads.net/avatar/identifier/'.$_SESSION["nick"].'">'.$_SESSION["nick"].'</a>';
        } else {
            echo '<button class="btn" onClick="sendToLogin()">Zaloguj sie</button>';
        }
        echo '</li>
    </ul>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <script src="app/js/navbar.js"></script>
</nav>';
    }
    function loadSiteMain() {
        echo '    <head>
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
        <title>VisionMc.pl | Społeczność i serwer minecraft.</title>
        </head><div class="jumbotron">
        <article class="content middle center">
            <h1>VisionMC.PL</h1>
            <div class="text-slider">
                <div><header>Nasz serwer minecraft jest jeszcze nowy, lecz staramy się jak najlepiej aby rozgrywka na nim była jak najlepsza. Nasza społeczność jest bardzo miła i przyjazna. Posiadamy chyba jeden najlepszych w całej Polse trybów <b>DEATHRUN</b>. Posiadamy takie tryby jak: <b>DEATHRUN, BEDWARS, MEDIUMHC</b>
                </header></div>

                <div>Na stronie możesz sprawdzić aktualności serwera i informacje o trybach. Po zalogowaniu do panelu będziesz mógł zmienić swoje dane kontaktowe, skina lub sprawdzić statystyki swoje jak i innych graczy. Niebawem również pojawią się rankingi graczy.</div>
            </div>
            <h2>Chcesz dołączyć do naszej elity?</h2>
            <button class="btn join">Minecraft</button>
            <button class="btn join">Discord</button>
        </div>
        <div class="bottom-shadow"></div>
    </div>
    <div class="inverted-x"></div>
    <article class="container">
        <section class="slide center">
            <div class="content animation-scroll scroll-left">
                <h1>DeathRun</h1>
                Ten tryb jest przeznaczony dla graczy którzy lubią wyzwania. Myślisz, że jesteś jednym z nich?
Wejdź i przekonaj się!. Jeden z graczy biegnie przez statystycznie krótką mape.. Jednak nie ma tak łatwo.
Po drodze musi pokonać pewne przeszkody coś w rodzaju Parkoura. Myślisz, że to nic trudnego? Zapomnij..
Drugi z graczy, zajmuje się podkładaniem pułapek specjalnie dla ciebie, by utrudnić ci grę w jaknajwiększym stopniu!
Np: znikające bloki, wybuchające tnt itp.
            </div>
            <img class="animation-scroll image" src="https://store-images.s-microsoft.com/image/apps.2678.14513124030084310.ec67955a-94fe-46fe-943b-1c6afb546be2.4e30ef5c-a49b-4b04-867c-a953936bf086" alt="">
        </section>
        <div class="light">
            <section class="slide center">
                <img class="animation-scroll scroll-left image" src="https://store-images.s-microsoft.com/image/apps.2678.14513124030084310.ec67955a-94fe-46fe-943b-1c6afb546be2.4e30ef5c-a49b-4b04-867c-a953936bf086" alt="">
                <div class="content animation-scroll">
                    <h1>BedWars</h1>
                    Lubisz grać zespołowo? A może wolisz przemierzać scieżki samotnie i pnąć się na wyżyny, aby znaleźć się w top1?
Bedwars jest dla ciebie! Bedwars to tryb rozrywki, gdzie rywalizują ze sobą cztery czteroosobowe drużyny, mogą być również trzyosobowe lub dwu lub solo. Każda z nich
jest przydzielana do jednej z wysp. Jednak celem tych zespołów nie jest eliminowanie przeciwników, ale niszczenie ich
bazy czyli łóżek.. Chcesz być mistrzem bedwars? Wbijaj śmiało na tryb!
                </div>
            </section>
        </div>
        <section class="slide center"">
            <div class="content animation-scroll scroll-left">
                <h1>MediumHC</h1>
                Interesuje cię rywalizacji między innymi uczestnikami gry lub frakcjami? A może lubisz grę o przetrwanie i mieć jaknajlepsze itemy na serwerze oraz z łatwością pokonywać rywali?
Preferujesz może długie granie ze znajomymi? Wejdź na EasyHc. gildie, podboje, rywalizacja. Właśnie można ten tryb przedstawić w trzech słowach. W odróżnieniu do Survivalu na tym serwerze jest coś takiego jak "Mega Drop". Z wykopanego kamienia wylatują przeróżne przedmioty. Od węgla po diamenty! Duża rywalizacja, jak sam tryb mówi - to jest Hardcore! 
Można spotkać łatwych, trudnych i wiele innych rodzai przeciwników. Tryb Survival i Easy Hardcore łączą dwie rzeczy - można tam tworzyć gildie inaczej (frakcje). Inaczej własna ,,baza"
gdzie wraz z innymi przyjaciółmi lub członkami gildi, budujecie własną twierdze, zbieracie surowce, oraz najwazniejsze rywalizujecie z innymi gildiami. Chcesz założyć najpotężniejszą frakcje na serwerze? Chcesz aby twoja twierdza, była niezniszczalna? A może chcesz rywalizować z innym o najlepsze miejsce? Ten Tryb również jest dla ciebie.
            </div>
            <img class="animation-scroll image" src="https://store-images.s-microsoft.com/image/apps.2678.14513124030084310.ec67955a-94fe-46fe-943b-1c6afb546be2.4e30ef5c-a49b-4b04-867c-a953936bf086" alt="">
        </section>   
    </article>
    <div class="inverted"></div>
    <script>
        function sendToNews() {
            window.location.search = "news";
        }
    </script>
    <article class="container">
        <div class="light">
            <div class="slide">
                <section class="news">
                    <div class="content animation-scroll scroll-left">
                        <h1>NOWOŚCI</h1>
                        <div style="font-size: 1.2rem; margin: 10px 0 10px 0;">04.03.2022</div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum fugit temporibus ipsam expedita corrupti pariatur nihil optio repudiandae reiciendis et amet tempora, at quasi rem in quas aliquid dolores vero? Molestias sit molestiae enim, vitae itaque vero ex fugit atque numquam esse eos fugiat nam nesciunt magni. Eaque, illo eos.
                        <center><button style="margin: 40px;" class="join btn" onClick="sendToNews()">Sprawdz nowosci na serwerze.</button></center>
                    </div>
                    <img src="https://scalacube.com/img/games-img/minecraft-pe-slider.png" alt="">
                </section>
                <div class="slider">
                    <img class="animation-scroll scroll-bottom" src="https://store-images.s-microsoft.com/image/apps.2678.14513124030084310.ec67955a-94fe-46fe-943b-1c6afb546be2.4e30ef5c-a49b-4b04-867c-a953936bf086" alt="">
                    <img class="animation-scroll scroll-bottom" src="https://store-images.s-microsoft.com/image/apps.2678.14513124030084310.ec67955a-94fe-46fe-943b-1c6afb546be2.4e30ef5c-a49b-4b04-867c-a953936bf086" alt="">
                    <img class="animation-scroll scroll-bottom" src="https://store-images.s-microsoft.com/image/apps.2678.14513124030084310.ec67955a-94fe-46fe-943b-1c6afb546be2.4e30ef5c-a49b-4b04-867c-a953936bf086" alt="">
                </div>
            </div>
        </article>
        <div class="slide center">
            <img src="https://www.mopop.org/media/3756/alex_steve_aquatic.png" alt="">
            <div class="content animation-scroll scroll-bottom">
                <h1>Kontakt</h1>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque minus sint expedita suscipit magni exercitationem quae, distinctio consequatur quod quos quasi omnis repudiandae et fugiat ea commodi voluptatibus odit mollitia?
            </div>
        </div>
    </div>
    <div class="inverted"></div>
    <div class="container">
        <div class="light">
            <div class="slide center">
                <div class="content animation-scroll scroll-bottom">
                    <h1 style="max-width: 700px;">WIEC NA CO JESZCZE CZEKASZ? DOŁACZ DO NASZEJ ELITY</h1>
                    <button class="btn join">Minecraft</button>
                    <button class="btn join">Discord</button> 
                </div>
            </div>
        </div>
    </div>
    <div class="inverted" style="height: 100px;"></div>
    <script src="app/js/scroll.js"></script>
    <script src="app/js/animation.js"></script>';
    }
    function loadFooter() {
        echo '    <footer>
        <div class="top">
            <div class="light">
                <div class="slide">
                    <div class="content col4">
                        <h2>Cos wiecej o nas: </h2>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. A iure facere ducimus, ab, veniam dolores beatae repellendus fuga repudiandae dolor laudantium cumque accusantium culpa. Optio minus sint similique sed vero?
                    </div>
                    <div class="content col4">
                        <h2>Przydatne linki: </h2>
                        <li><a title="Strona główna" href="/">Strona glowna</a></li>
                        <li><a title="Sklep" href="?sklep">Sklep</a></li>
                        <li><a title="Bany" href="?bany">Bany</a></li>
                        <li><a title="Nowości" href="?news">Nowości</a></li>
                    </div>
                    <div class="content col4 down">
                        <li><a title="Opis rang" href="?rank">Opis rang</a></li>
                        <li><a title="Faq" href="?faq">Faq</a></li>
                        <li><a title="Logowanie" href="?login">Logowanie</a></li>
                        <li><a title="Regulaminy" href="?regulamin">Regulaminy</a></li>
                    </div>
                    <div class="content col4">
                        <h2>Nasze social media: </h2>
                        <div class="social">
                            <a href="#" class="discord"><i class="fa-brands fa-discord"></i></a>
                            <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="facebook"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="content">
                Stworzone przez: VisionMc.pl &copy 2022
            </div>
        </div>
    </footer>';
    }
    function loadLogin() {
        echo '<article class="container">
            <div class="login slide center">
                <section class="content"><img src="app/images/login.png" alt="" style="max-width: 400px">
                <p>Aby zalogować sie do panelu, w którym będziesz mógł zakupić usługę, zmieninć skina czy hasło. Użyj loginu i hasła z gry.</p>
                </section>
                <div class="content login">
                    <h2>LOGOWANIE DO PANELU</h2>
                    <label id="nick">
                        Nick<span><i class="fa-solid fa-circle-exclamation"></i>
                        <div class="nickerror"></div></span>
                        <input type="text" id="nick" name="nick" placeholder="Wpisz swoj nick">
                    </label>
                    <label id="password">
                        Haslo<span><i class="fa-solid fa-circle-exclamation"></i>
                        <div class="passworderror"></div></span>
                        <input type="password" id="password" name="password" placeholder="Wpisz swoje haslo">
                    </label>
                    <button class="btn join" id="login">Zaloguj</button>
                    <div class="loader"><div></div></div>
                    <div>Nie pamietasz hasła? <a href="">Kliknij.</a></div>
                </div>
            </div>
        </article>
        <div class="inverted inverted-small"></div>
        <script src="app/js/login.js"></script>
        ';
    }
    function loadNavigation($name, $namelink, $nextname) {
        echo '        <title>'.$name.'</title>
        <div class="inverted inverted-small"></div>
        <div class="navigation">
            <div class="slide">';
            if ($nextname != "") {    
                echo '<a href="index.php">Strona główna</a>/<a href="?'.$namelink.'">'.$name.'</a>/'.$nextname;
            } else {
                echo '<a href="index.php">Strona główna</a> / '.$name; }
            echo '</div>
        </div>';
    }
    function loadShop() {
        echo '<div class="container">
            <div class="content center slide" style="flex-direction: column;">
                <div id="cookieshop" class="content"></div>
                <div id="offerts" class="row"></div>
            </div>
            <div class="modal"></div>
        </div>
        <div class="inverted inverted-small"></div>
        <script src="app/js/shopgenerator.js"></script>
        ';
    }
    function loadShopNick() {
        echo '<article class="container">
            <section class="slide content">
            <div class="content center login" style="align-items: center">
            <h2 style="margin-bottom: 20px;">Aby zakupić usługę, pisz swój nick lub innego gracza.</h2>
                    <div class="alert alert-info"><article>Sklep serwerowy, możesz doładować tu swój portfel lub kupić inne usługi. Dodatkowo wpisując nick innego gracza możesz wysłać mu prezent.</article>
                    Również zamiast wpisywać nicku możesz zalogować się do swojego panelu. <a href="?login">Zaloguj do panelu.</a></div>
                    <div class="alert alert-warnning">Uwaga! Pamietaj byś nie pomylił swojego nicku lub osoby dla której kupujesz prezent. Administracja nie odpowiada za twoje pomyłki.</div>
                    <label>Nick gracza <input class="nick" type="text" id=""></label>   
                <button class="btn join" onclick="shopCookie()">Zatwierdz</button>
                </div>
            </section>
        </article>
        <div class="inverted inverted-small"></div>
        <script src="app/js/shopgenerator.js"></script>';
    }
    function loadProfile($name) {
        require_once("api/connect-mysql.php");
        $result = $mysql["login"]->query("SELECT mailAddress FROM `user_profiles` WHERE `lastNickname` = '$name';");
        $result = mysqli_fetch_assoc($result);
        $email = $result["mailAddress"];
        $result = $mysql["global"]->query("SELECT Discord FROM `Statystyki` WHERE `Nick` = '$name';");
        $result = mysqli_fetch_assoc($result);
        $discord = $result["Discord"];
        echo '<div class="container">
        <script>
        function sendToLogout() {
            window.location.search = "logout";
        }
        </script>
        <div class="menu profile">
            <button class="btn menuprofile">Informacje</button>
            <button class="btn menuprofile">Edycja profilu</button>
            <button class="btn menuprofile">Statystyki</button>
            <button class="btn menuprofile">Rankingi</button>
            <button class="btn menuprofile">Zmiana Skina</button>
            <button class="btn menulogout" onClick="sendToLogout()">Wyloguj</button>
        </div>
            <div class="profileSlider">
                <div class="slide">
                <img src="https://mc-heads.net/body/'.$name.'/128.png">
                    <div class="content">
                        <h1>Witaj '.$name.'</h1>
                        <div class="alert alert-info">
                        Mozesz tutaj sprawdzać swoje statystyki, edytować dane logowania takie jak hasło. Jeżeli znudzi Ci się stary skin możesz go również tutaj zmienić. Panel umożliwia dodatkowo doładowanie portfela, przez który będziesz mógł kupić specjalne przedmioty i rangi na serwerze. 
                        </div>
                        <div class="alert alert-warnning">
                        Pamiętaj, by nie podawać nikomu swojego hasła. 
                        </div>
                        <div class="alert alert-warnning">
                        Pamiętaj, logując sie na serwer akceptujesz regulamin!
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://mc-heads.net/body/'.$name.'/128.png">
                    <div class="content profile editprofile">
                        <h1>Inne dodatki</h1>
                        <label id="email">Zmien email
                            <input type="text" id="email" placeholder="Email" value="'.$email.'">
                        </label>
                        <label id="discord">Zmien discord
                            <input type="text" id="discord" placeholder="Discord" value="'.$discord.'">
                        </label>
                        <div style="margin: 20px 0 10px 0; display: flex; align-items: center;">
                        <input type="checkbox" id="premium"> Aktywowane logowanie premium</div>
                        <button class="btn join" id="editprofile">Zapisz</button>
                        <div class="loader editprofile"><div></div></div>
                    </div>
                    <div class="content profile changepassword">
                        <h1>Zmiana hasła</h1>
                        <label id="oldpassword">Stare Haslo
                            <input type="password" id="oldpassword" placeholder="Wpisz stare haslo">
                        </label>
                        <label id="newpassword">Nowe haslo
                            <input type="password" id="newpassword" placeholder="Wpisz nowe haslo">
                        </label>
                        <label id="renewpassword">Powtorz nowe haslo
                            <input type="password" id="renewpassword" placeholder="Powtorz nowe haslo">
                        </label>
                        <button class="btn join" id="changepassword">Zmień</button>
                        <div class="loader password"><div></div></div>
                    </div>
                    <script src="app/js/changepassword.js"></script>
                    <script src="app/js/changeprofile.js"></script>
                </div>
                <div class="slide">
                    <img src="https://mc-heads.net/body/'.$name.'/128.png">
                    <div class="content">
                        <h1>Statystyki</h1>
                        <div class="profile center menu">
                            <button class="btn menustats">OGÓLNE</button>
                            <button class="btn menustats">DEATHRUN</button>
                            <button class="btn menustats">BEDWARS</button>
                            <button class="btn menustats">MEDIUMHC</button>
                        </div>
                        <div class="profileSlider stats">
                            <div class="row slide general"><center><div class="loader loader-general"><div></div></div></center></div>
                            <div class="row slide deathrun"><center><div class="loader loader-deathrun"><div></div></div></center></div>
                            <div class="row slide bedwars"><center><div class="loader loader-bedwars"><div></div></div></center></div>
                            <div class="row slide mediumhc"><center><div class="loader loader-mediumhc"><div></div></div></center></div>
                        <script src="app/js/stats.js"></script>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://mc-heads.net/body/'.$name.'/128.png">
                    <div class="content">
                        <h1>Ranking</h1>
                        <span style="color: red; font-size: 2rem">Niebawem</span>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://mc-heads.net/body/'.$name.'/128.png">
                    <div class="content profile">
                        <h1>Zmiana skina</h1>
                        <label id="skin">Gracz majacy skina
                            <input type="text" id="skin" placeholder="Nick gracza">
                        </label>
                        <button class="btn join" id="login">Zapisz</button>
                        <div class="loader"><div></div></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="app/js/carusele.js"></script>
        <div class="inverted inverted-small"></div>
        ';
    }
    function createNotFindSite() {
        echo '<div class="container">
            <div class="slide center">
                <img src="app/images/error404.png">
                <div class="content center">
                    <h2 style="margin-bottom: 20px;">Najprawdopodobniejszcze przyczyny</h2>
                    <li>Nie odnaleziono strony na serwerze.</li>
                    <li>Strona lub profil zostaly usuniete.</li>
                    <li>Wpisałeś zły adres w przeglądarce.</li>
                    <h3 style="margin-top: 30px;">Jeżeli masz jakies zastrzeżenia napisz do nas
                    na email: support@visionmc.pl</h3>
                </div>
            </div>
        </div>
        <div class="inverted inverted-small"></div>
        ';   
    }
    function loadRegul() {
        echo '<article class="container">
            <div class="slide">
                <div class="content regulcont" style="max-width: 1300px;">
                    <h1>REGULAMINY</h1>
                    <div class="alert alert-info" style="margin: 30px;"><article>Znajdziesz tutaj regulamin serwera minecraft i usług. Pamiętaj abyś przestrzegał regulamin.</article></div>
                    <li><a href="#minecraft">Regulamin serwera minecraft</a></li>
                    <li><a href="#sklep">Regulamin usług</a></li>
                    <li><a href="#cookie">Polityka prywatności (ciasteczka i.t.p)</a></li>
					<li><a href="#cookie">Realizacja zamówień</a></li>
					<li><a href="#cookie"> Odstąpienie od umowy, reklamacje </a></li>
					
                    <div id="minecraft"></div>
                    <section class="regul">
                        <h2>REGULAMIN SERWERA MINECRAFT</h2>
                        <li>Postanowienia ogólne.</li>
                        <ul>
						    <li>Serwis internetowy działający pod adresem VisionMc.pl prowadzony jest przez Jakuba Maja, Boronice 56 28-500 Kazimierza Wielka.</li>
                            <li>Nieznajomość regulaminu nie zwalnia z jego przestrzegania.</li>
                            <li>Każda zarejestrowana, nie negująca  regulaminu osoba ma prawo do gry na naszym serwerze oraz w pełni korzystania z serweru głosowego discord.</li>
                            <li>Administracja ma prawo karać za czyny nie uwzględnione w regulaminie, które w ocenie indywidualnej działają na szkodę serwera</li>
                            <li>Obowiązuje ogólnie pojęta zasada dobrego wychowania, ograniczonego zaufania, netykiety i normy socjalne.</li>
							<li>Administracja zastrzega sobie prawo do usuwania niechcianych treści bez poinformowania o tym społeczności.</li>
							<li>Administracja ma pełne prawo do modyfikowania lub zmieniania zawartości regulaminu bez konieczności wcześniejszego informowania użytkowników o zmianach.</li>
                        </ul>
                        <li>Rejestracja</li>
                        <ul>
                            <li>Pod groźbą permanentnego zablokowania konta  zabrania się stosowania określeń wulgarnych, seksistowskich, rasistowskich itp. w nazwach użytkownika.</li>
                            <li>Zakazane jest podszywanie się pod administrację.</li>
                            <li>Zakazane jest sprzedawanie wszelkich kont oraz przedmiotów za realne dobra.</li>
                            <li>W przypadku, gdy na danym adresie IP gra więcej niż 1 osoba (np. brat/siostra), użytkownik powinien zgłosić ten fakt do administracji,, inaczej konta mogą zostać zablokowane.</li>
                        </ul> 
                        <li>Regulamin Gry</li>
                        <ul>
                            <li>Na serwerze zakazuje się:</li>
                            <li>Posiadania oraz używania jakichkolwiek wspomagaczy (cheatów) ułatwiających użytkownikowi grę takich jak TinyTask, killaura, autogardowanie, xray, aimbot itp.</li>
                            <li>Używania wulgaryzmów, obrażania innych graczy, nękania oraz szkalowania użytkowników.</li>
                            <li>Używania skrótów powszechnie uznawanych za wulgarne</li>
                            <li>Handlowania (bądź usiłowania handlowania) za realne pieniądze</li>
							<li>Sprzedaży swojego serwerowego konta</li>
							<li>Utrudniania rozgrywki, wykorzystywania błędów</li>
							<li>Floodowania, nadmiernego spamowania na chacie</li>
							<li>Reklamowania innych serwerów Minecraft, Discord, TeamSpeak</li>
                        </ul> 
                         
                    </section>
                    <div id="sklep"></div>
                    <section class="regul">
                        <h2>Regulamin Sprzedaży usług </h2>
						<p><b><center>Niniejszy Regulamin określa ogólne warunki, zasady oraz sposób sprzedaży Usług</center></b></p>
                        <li>Definicje</li>
                        <ul>
                            <li>Klient/Gracz - oznacza osobę fizyczną dokonującą czynności prawnej niezwiązanej bezpośrednio z jej działalnością gospodarczą lub zawodową.</li>
                            <li>Konto Klienta/Gracza - oznacza konto Klienta założone na Serwerze w grze MINECRAFT na podstawie Regulaminu Gry.</li>
                            <li>Nick - oznacza nazwę identyfikującą Konto Klienta w ramach Serwera.</li>
                            <li>Regulamin – oznacza niniejszy regulamin sprzedaży Usług.</li>
                            <li>Regulamin Gry - oznacza regulamin gry MINECRAFT dostępny pod adresem https://visionmc.pl/?regulamin oraz https://visionmc.pl/?sklep na podstawie którego na rzecz Klienta prowadzone jest Konto Klienta.</li>
							<li>Serwer - oznacza serwery komputerowe prowadzone przez Sprzedawcę, za pośrednictwem których Klienci mogą korzystać z gry MINECRAFT, których lista znajduje się na Stronie Internetowej Sklepu.</li>
							<li>Strona Internetowa - oznacza strony internetowe prowadzone przez Sprzedawcę, działające w domenie https://visionmc.pl</li>
							<li>Umowa sprzedaży - oznacza umowę sprzedaży Usługi zawartą na odległość na zasadach określonych w  Regulaminie, między Klientem a Sprzedawcą.</li>
							<li>Usługa - udostępnienie użytkownikowi uprawnień na serwerze gry lub doładowanie wirtualnych punktów/przedmiotów do konta gracza na serwerze.</li>
							<li>Minecraft - gra survivalowa wydana przez Mojang AB.</li>
                        </ul>
                        <li> Postanowienia Ogólne.</li>
                        <ul>
                            <li>W celu korzystania ze strony visionmc..pl, użytkownik powinien posiadać aktualną przeglądarkę. internetową Firefox, Chrome, Safari bądź Opera oraz system operacyjny: Windows, Android, OSX, iOS bądź Linux.</li>
                            <li>W celu dostępu do serwera visionmc.pl konieczne jest posiadanie zainstalowanej gry Minecraft oraz korzystanie ze stabilnego połączenia internetowego o prędkości co najmniej 1Mbps.</li>
                        </ul> 
                        <li>Zasady Użytkowania</li>
                        <ul>
                            <li>Użytkownik posiadając konto na serwerze VisionMc.pl akceptuje regulamin oraz warunki ogólno przyjętej netykiety poprawnego zachowania w internecie.</li>
                            <li>Wszystkie budowle / pluginy / pomysły, które zostały stworzone na serwerze / dla serwera lub aktualnie są używane na serwerze są własnością serwera i nikomu kto tworzył tą zawartość nie przysługują zwroty / rekompensaty.</li>
                            <li>Aby zapewnić wszystkim graczom pozytywne wrażenia z gry i uczciwą rywalizację, jakiekolwiek próby oszukiwania systemu serwera VisionMc.pl na jego niekorzyść, używanie wspomagaczy, obrażanie innych oraz reklamowanie innych serwisów oraz serwerów gier może skończyć się natychmiastowym wyrzuceniem z serwera bądź natychmiastową blokadą konta użytkownika - tzw. banem.</li>				
                        </ul> 
						  <li> Realizacja zamówień </li>
						  <ul>
						    <li>Szczegóły zawarte w Sklepie stanowią ofertę Sprzedawcy zawarcia umowy sprzedaży usługi</li>
							<li>Klient może przyjąć ofertę przez 7 (słownie: siedem) dni w tygodniu i 24 (słownie: dwadzieścia cztery) godziny, korzystając z Płatności. Przy każdym Produkcie prezentowanym w Sklepie zamieszczone są odpowiednie instrukcje, w celu realizacji danej transakcji</li>
							<li>Ceny w Sklepie zamieszczone przy danym Produkcie stanowią ceny brutto i określone są w złotych polskich (PLN)</li>
							<li>Zamówione usługi aktywowane są przez Sprzedawcę niezwłocznie na Koncie Klienta po przyjęciu przez Klienta oferty Sprzedawcy i prawidłowym przetworzeniu Płatności.</ul>
                         </ul>
						  <li> Odstąpienie od umowy </li>
						   <ul>
						    <li>Klient może odstąpić od umowy bez podania przyczyn, składając stosowne oświadczenie na piśmie w terminie 14 (słownie: czternaście) dni od dnia zakupu na adres korespondencyjny Administratora</li>
							<li>Prawo odstąpienia od umowy nie przysługuje Klientowi w odniesieniu do umów o dostarczanie treści cyfrowych, które nie są zapisane na nośniku materialnym, jeżeli spełnianie świadczenia rozpoczęło się za wyraźną zgoda Klienta przed upływem terminu do odstąpienia od umowy</li>
							<li>Prawo odstąpienia od umowy nie przysługuje Klientowi w odniesieniu do umów o świadczenie usług, jeżeli Sprzedawca wykonał w pełni usługę za wyraźna zgoda Klienta.</li>
							</ul>
							<li> Reklamacje </li>
							 <ul>
							  <li> Klient może zgłosić Sprzedawcy reklamację w związku z realizacją umowy sprzedaży na adres korespondencyjny Administratora. Sprzedawca niezwłocznie, lecz nie później niż w terminie 14 (słownie: czternaście) dni rozpatruje reklamacje i udziela odpowiedzi na adres podany w danym zgłoszeniu</li>
							  <li> W przypadku ePłatności, reklamacje obsługuje podmiot kontrolujący HotPay oraz będący administratorem infrastruktury obsługującej system płatniczy; spółka ePłatności spółka z ograniczoną odpowiedzialnością spółka komandytowa, z siedzibą w Andrychowie przy ulicy 27 Stycznia 9, 34-120 Andrychów, NIP: 5512627897, REGON: 366165170</li>
							  <ul>
                    </section>

                </div>
            </div>
        </article>
        <div class="inverted inverted-small"></div>';   
    }
    function loadFaq() {
        echo '<article class="container">
            <div class="slide center">
                <div class="content center" style="max-width: 1200px; width: 100%; display: flex; flex-direction: column; align-items: center;">
                    <h1>FAQ</h1>
                    <div class="alert alert-info"><article>Masz problem na serwerze, rozwiąż go szukając go tutaj. Faq jest to zbiór najczęściej zadawanych pytań.</article></div>
                    <article class="faq"></article>
                </div>    
                <script src="app/js/faq.js"></script>
            </div>
        </article>
        <div class="inverted inverted-small"></div>
        ';   
    }
    function loadRank() {
        echo '<div class="container">
            <div class="slide center">
                <div class="content" style="max-width: 1200px; width: 100%">
                    <h1>OPIS RANG</h1>
                    <table>
                        <tr>
                            <th></th>
                            <th><span style="color: #555555">[</span><span style="color: #FFFF55">VIP</span><span style="color: #555555">]</span></th>
                            <th><span style="color: #555555">[</span><span style="color: #FFAA00">SVIP</span><span style="color: #555555">]</span></th>
                            <th><span style="color: #555555">[</span><span style="color: #55FF55">SPONSOR</span><span style="color: #555555">]</span></th>
                        </tr>
                    </table>
                    <script src="app/js/generateranks.js"></script>
                </div>
            </div>
        </div>
        <div class="inverted inverted-small"></div>
        ';   
    }
    function loadForums() {
        echo '<article class="container">
            <div class="slide center">
                <div class="content center" style="max-width: 1200px; width: 100%">
                    <h1>NOWOŚCI I INFORMACJE</h1>
                    <article id="articles"></article>
                    <center><div class="loader" style="display: block"><div></div></div>
                    <button id="loadarticle" style="display: none" class="btn join"><i class="fa-solid fa-down"></i>Załaduj więcej</button></center>
                    <script src="app/js/forums.js"></script>
                </div>
            </div>
        </article>
        <div class="inverted inverted-small"></div>
        ';   
    }
    function loadArticle() {
        echo '<article class="container">
            <div class="slide center">
                <article id="article">
                <div class="bigloader">
                    <div class="loader" style="display: block"><div></div></div>
                </div>
                </article>
                <article class="comments">';
                if (isset($_SESSION["nick"])) {
                    echo 'Dodaj komentarz
                    <div class="groupinput">
                    <input type="text" class="commentinput" placeholder="Wpisz treść komentarza..."><button class="addComment">Opublikuj</button>
                    </div>';
                }
                echo '</div>
            </div>
        </article>
        <script src="app/js/article.js"></script>
        <div class="inverted inverted-small"></div>
        ';   
    }
}
?> 

