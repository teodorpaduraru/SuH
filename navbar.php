<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./css/NavigationBar.css">
    </head> 
    <body>
        <div class="topnav" id="navbar">
            <?php
                // index page
                if(basename($_SERVER['PHP_SELF']) === "index.php")
                    echo "<a class=\"topnav1 active\" href=\"./index.php\">Acasă</a>";
                else
                    echo "<a class=\"topnav1\" href=\"./index.php\">Acasă</a>";

                // game page
                if(basename($_SERVER['PHP_SELF']) === "game_page.php")
                    echo "<a class=\"topnav2 active\" href=\"./game_page.php\">Joacă!</a>";
                else
                    echo "<a class=\"topnav2\" href=\"./game_page.php\">Joacă!</a>";

                // gallery page
                if(basename($_SERVER['PHP_SELF']) === "gallery_page.php")
                    echo "<a class=\"topnav3 active\" href=\"./gallery_page.php\">Galerie</a>";
                else
                    echo "<a class=\"topnav3\" href=\"./gallery_page.php\">Galerie</a>";
                
                // ranking page
                if(basename($_SERVER['PHP_SELF']) === "ranking_page.php")
                    echo "<a class=\"topnav4 active\" href=\"./ranking_page.php\">Clasament</a>";
                else
                    echo "<a class=\"topnav4\" href=\"./ranking_page.php\">Clasament</a>";     
                
                // contact page
                if(basename($_SERVER['PHP_SELF']) === "contact_page.php")
                    echo "<a class=\"topnav5 active\" href=\"./contact_page.php\">Contact</a>";
                else
                    echo "<a class=\"topnav5\" href=\"./contact_page.php\">Contact</a>";

                // about page
                if(basename($_SERVER['PHP_SELF']) === "about_page.php")
                    echo "<a class=\"topnav6 active\" href=\"./about_page.php\">Despre</a>";
                else
                    echo "<a class=\"topnav6\" href=\"./about_page.php\">Despre</a>"; 
                
                //rules page
                if(basename($_SERVER['PHP_SELF']) === "rules_page.php")
                    echo "<a class=\"topnav7 active\" href=\"./rules_page.php\">Regulament</a>";
                else
                    echo "<a class=\"topnav7\" href=\"./rules_page.php\">Regulament</a>";

                // pages if user loged in or not
                if (isset($_SESSION["uid"])) {
                    if(basename($_SERVER['PHP_SELF']) === "profile_page.php")
                        echo "<a class=\"topnav8 active\" href=\"./profile_page.php\">Profil</a>";
                    else
                        echo "<a class=\"topnav8\" href=\"./profile_page.php\">Profil</a>";
                    echo "<a class=\"topnav8\" href=\"./includes/logout.inc.php\">Log Out</a>";
                }
                else {
                    if(basename($_SERVER['PHP_SELF']) === "login_page.php")
                        echo "<a class=\"topnav8 active\" href=\"./login_page.php\">Logare</a>";
                    else
                        echo "<a class=\"topnav8\" href=\"./login_page.php\">Logare</a>";
                }
            ?>
            <a href="javascript:void(0);" class="icon" onclick="hamburgerNav()">
            </a>
            <script src="./scripts/game_page.js"></script>
        </div>
    </body>
</html>
