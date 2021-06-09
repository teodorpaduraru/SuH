﻿<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/general.css">
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/home_page.css">
	    <link rel="stylesheet" href="language.css">
        <title>Home | SuH</title> <!--titlul paginii-->
    </head>

    <body>
        <div id="root">
            <div class="page_wrapper">
                <!--PHP folosit pentru afisarea barii de navigare-->
                <?php
                    require APPROOT . '/views/includes/navbar.php'; 
                ?>
                <!--Div folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
                <div class="langWrap">
                    <center>
                        <p style="color:ghostwhite">Language option</p>
                        <a href="#" language='romanian' style="color:greenyellow" class="active">RO</a>
                        <a href="#" language='english' style="color:greenyellow">EN</a>
                    </center>
                </div>
                <main>
                    <?php
                    if (isset($_SESSION["uid"])) {
                        echo "<p class=\"content\" style=\"color: gold\">Bun venit, ".$_SESSION["userName"]."!</p>";
                        }
                    ?>
                    <p class="description1" style="color: gold">SuperHeroes Web Game: joc Web educativ destinat adolescenților.</p>
                    <p class="description2" style="color: gold">Scenariul, miza și condițiile de victorie/înfrângere sunt deja prestabilite.</p>
                    <p class="description3" style="color: gold">Toate partidele se vor desfășura în sistem trivia (conquistador).</p>
                    <p class="description4" style="color: gold">Mulțumim și succes tuturor!</p>
                </main>
            </div>

            <!--Script folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
            <script>
                const langEl = document.querySelector('.langWrap');
                const link = document.querySelectorAll('a');
                const descrEl1 = document.querySelector('.description1');
                const descrEl2 = document.querySelector('.description2');
                const descrEl3 = document.querySelector('.description3');
                const descrEl4 = document.querySelector('.description4');
                const descrEl5 = document.querySelector('.content');
                const descrEl6 = document.querySelector('.active');
                const descrEl7 = document.querySelector('.topnav2');
                const descrEl8 = document.querySelector('.topnav3');
                const descrEl9 = document.querySelector('.topnav4');
                const descrEl10 = document.querySelector('.topnav5');
                const descrEl11 = document.querySelector('.topnav6');
                const descrEl12 = document.querySelector('.topnav7');
                const descrEl13 = document.querySelector('.topnav8');
                const descrEl14 = document.querySelector('.topnav9');

                link.forEach(el => {
                    el.addEventListener('click', () => {
                        langEl.querySelector('.active').classList.remove('active');
                        el.classList.add('active');
                        const attr = el.getAttribute('language');


                        descrEl1.textContent = data[attr].description1;
                        descrEl2.textContent = data[attr].description2;
                        descrEl3.textContent = data[attr].description3;
                        descrEl4.textContent = data[attr].description4;
                        descrEl5.textContent = data[attr].content;
                        descrEl6.textContent = data[attr].active;
                        descrEl7.textContent = data[attr].topnav2;
                        descrEl8.textContent = data[attr].topnav3;
                        descrEl9.textContent = data[attr].topnav4;
                        descrEl10.textContent = data[attr].topnav5;
                        descrEl11.textContent = data[attr].topnav6;
                        descrEl12.textContent = data[attr].topnav7;
                        descrEl13.textContent = data[attr].topnav8;
                        descrEl14.textContent = data[attr].topnav9;
                    });
                });

                var data = {

                    "romanian":
                    {
                        "description1": "SuperHeroes Web Game: joc Web educativ destinat adolescenților.",
                        "description2": "Scenariul, miza și condițiile de victorie/înfrângere sunt deja prestabilite.",
                        "description3": "Toate partidele se vor desfășura în sistem trivia (conquistador).",
                        "description4": "Mulțumim și succes tuturor!",
                        "content": "Bun venit,",
                        "active": "Acasă",
                        "topnav2": "Logare",
                        "topnav3": "Joacă!",
                        "topnav4": "Galerie",
                        "topnav5": "Clasament",
                        "topnav6": "Profil",
                        "topnav7": "Contact",
                        "topnav8": "Despre",
                        "topnav9": "Reguli",
                    },
                    "english":
                    {
                        "description1": "SuperHeroes Web Game: Educational web game for teenagers.",
                        "description2": "The scenario, stake and conditions of victory / defeat are already predetermined.",
                        "description3": "All games will take place in a trivia system (conquistador).",
                        "description4": "Thanks and good luck to all!",
                        "content": "Welcome,",
                        "active": "Home",
                        "topnav2": "LogIn",
                        "topnav3": "Play!",
                        "topnav4": "Gallery",
                        "topnav5": "Ranking",
                        "topnav6": "Profile",
                        "topnav7": "Contact",
                        "topnav8": "About",
                        "topnav9": "Rules",
                    }
                }
            </script>

            <div class="international">
                <!--API folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({ pageLanguage: 'ro', includedLanguages: 'en,fr,de' }, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>

            <!--PHP folosit pentru afisarea footerului-->
            <?php
                include_once 'includes/footer.php';
            ?>
                    <!--Legatura pentru Control Panel de administrare-->
                    <center>
                        <a href="./cpanel.html" style="color:gold">Control Panel<br>(administrator only)</a>
                    </center>
        </div>
                    <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
        <script type= "text/javascript" src= "./keyboard.js" > </script>
    </body>
</html>