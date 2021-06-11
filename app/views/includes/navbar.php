<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="utf-8"/>
         <!--stiluri css folosite in navbar-->
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/NavigationBar.css">
    </head> 
    <body> 
        <div class="topnav" id="navbar">
            <?php
                // index page
                if(basename($_SERVER['REQUEST_URI']) === "index_page")
                    echo "<a class=\"topnav1 active\" href=\"". URLROOT ."/pages/index_page\">Acasă</a>";
                else
                    echo "<a class=\"topnav1\" href=\"". URLROOT ."/pages/index_page\">Acasă</a>";

                // game pages
                if(basename($_SERVER['REQUEST_URI']) === "game_page" ||
                basename($_SERVER['REQUEST_URI']) === "beginner" ||
                basename($_SERVER['REQUEST_URI']) === "intermediate" ||
                basename($_SERVER['REQUEST_URI']) === "expert")
                    echo "<a class=\"topnav2 active\" href=\"". URLROOT ."/games/game_page\">Joacă!</a>";
                else
                    echo "<a class=\"topnav2\" href=\"". URLROOT ."/games/game_page\">Joacă!</a>";
                // gallery page
                if(basename($_SERVER['REQUEST_URI']) === "gallery_page")
                    echo "<a class=\"topnav3 active\" href=\"". URLROOT ."/pages/gallery_page\">Galerie</a>";
                else
                    echo "<a class=\"topnav3\" href=\"". URLROOT ."/pages/gallery_page\">Galerie</a>";
                
                // ranking page
                if(basename($_SERVER['REQUEST_URI']) === "ranking_page")
                    echo "<a class=\"topnav4 active\" href=\"". URLROOT ."/pages/ranking_page\">Clasament</a>";
                else
                    echo "<a class=\"topnav4\" href=\"". URLROOT ."/pages/ranking_page\">Clasament</a>";     
                
                // contact page
                if(basename($_SERVER['REQUEST_URI']) === "contact_page")
                    echo "<a class=\"topnav5 active\" href=\"". URLROOT ."/pages/contact_page\">Contact</a>";
                else
                    echo "<a class=\"topnav5\" href=\"". URLROOT ."/pages/contact_page\">Contact</a>";

                // about page
                if(basename($_SERVER['REQUEST_URI']) === "about_page")
                    echo "<a class=\"topnav6 active\" href=\"". URLROOT ."/pages/about_page\">Despre</a>";
                else
                    echo "<a class=\"topnav6\" href=\"". URLROOT ."/pages/about_page\">Despre</a>"; 
                
                //rules page
                if(basename($_SERVER['REQUEST_URI']) === "rules_page")
                    echo "<a class=\"topnav7 active\" href=\"". URLROOT ."/pages/rules_page\">Regulament</a>";
                else
                    echo "<a class=\"topnav7\" href=\"". URLROOT ."/pages/rules_page\">Regulament</a>";

                // pages if user loged in or not
                if (isset($_SESSION['uid'])) {
                    if(basename($_SERVER['REQUEST_URI']) === "profile_page")
                        echo "<a class=\"topnav8 active\" href=\"". URLROOT ."/users/profile_page\">Profil</a>";
                    else
                        echo "<a class=\"topnav8\" href=\"". URLROOT ."/users/profile_page\">Profil</a>";
                    echo "<a class=\"topnav8\" href=\"". URLROOT ."/users/logout\">Log Out</a>";
                }
                else {
                    if(basename($_SERVER['REQUEST_URI']) === "login" ||
                    basename($_SERVER['REQUEST_URI']) === "register" ||
                    basename($_SERVER['REQUEST_URI']) === "forgot_password")
                        echo "<a class=\"topnav8 active\" href=\"". URLROOT ."/users/login\">Logare</a>";
                    else
                        echo "<a class=\"topnav8\" href=\"". URLROOT ."/users/login\">Logare</a>";
                }
            ?>
            <a href="javascript:void(0);" class="icon" onclick="hamburgerNav()">
            </a>
            <script src="<?php echo URLROOT;?>/public/scripts/game_page.js"></script>
        </div>
    </body>
</html>
