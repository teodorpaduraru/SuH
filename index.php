<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/home_page.css">
	    <link rel="stylesheet" href="language.css">
        <title>Home | SuH</title>
    </head>

    <body>

        <!--<div class="international">
            <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Language Option</button>
            <ul class="dropdown-menu">
                <li>
                    <a href="#en" style="color: greenyellow">
                        <script src="./scripts/intern.js"></script> English &nbsp<img src="./Images/32.png" style=height:35px>
                    </a>
                </li>
                <li>
                    <a href="#ro" style="color: greenyellow">
                        <script src="./scripts/intern.js"></script> Romana&nbsp<img src="./Images/64.png" style=height:35px>
                    </a>
                </li>
            </ul>
            <script type="text/javascript"></script>
            <script src="./scripts/intern.js"></script>
            <script type="text/javascript" src="./scripts/exemplu.js"></script>
        </div>
        </div>
            -->
        <div id="root">
            <div class="page_wrapper">
                <?php
                    include_once 'navbar.php';
                ?>
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
                        echo "<p class=\"description1\" style=\"color: gold\">Welcome ".$_SESSION["userName"].".</p>";
                        }
                    ?>
                    <p class="description1" style="color: gold">SuperHeroes Web Game: joc Web educativ destinat adolescenților.</p>
                    <p class="description2" style="color: gold">Scenariul, miza și condițiile de victorie/înfrângere sunt deja prestabilite.</p>
                    <p class="description3" style="color: gold">Toate partidele se vor desfășura în sistem trivia (conquistador).</p>
                    <p class="description4" style="color: gold">Mulțumim și succes tuturor!</p>
                </main>
            </div>
            <script>
                const langEl = document.querySelector('.langWrap');
                const link = document.querySelectorAll('a');
                const descrEl1 = document.querySelector('.description1');
                const descrEl2 = document.querySelector('.description2');
                const descrEl3 = document.querySelector('.description3');
                const descrEl4 = document.querySelector('.description4');
                const descrEl5 = document.querySelector('.active');
                const descrEl6 = document.querySelector('.topnav2');
                const descrEl7 = document.querySelector('.topnav3');
                const descrEl8 = document.querySelector('.topnav4');
                const descrEl9 = document.querySelector('.topnav5');
                const descrEl10 = document.querySelector('.topnav6');
                const descrEl11 = document.querySelector('.topnav7');
                const descrEl12 = document.querySelector('.topnav8');
                const descrEl13 = document.querySelector('.topnav9');

                link.forEach(el => {
                    el.addEventListener('click', () => {
                        langEl.querySelector('.active').classList.remove('active');
                        el.classList.add('active');
                        const attr = el.getAttribute('language');


                        descrEl1.textContent = data[attr].description1;
                        descrEl2.textContent = data[attr].description2;
                        descrEl3.textContent = data[attr].description3;
                        descrEl4.textContent = data[attr].description4;
                        descrEl5.textContent = data[attr].active;
                        descrEl6.textContent = data[attr].topnav2;
                        descrEl7.textContent = data[attr].topnav3;
                        descrEl8.textContent = data[attr].topnav4;
                        descrEl9.textContent = data[attr].topnav5;
                        descrEl10.textContent = data[attr].topnav6;
                        descrEl11.textContent = data[attr].topnav7;
                        descrEl12.textContent = data[attr].topnav8;
                        descrEl13.textContent = data[attr].topnav9;
                    });
                });

                var data = {

                    "romanian":
                    {
                        "description1": "SuperHeroes Web Game: joc Web educativ destinat adolescenților.",
                        "description2": "Scenariul, miza și condițiile de victorie/înfrângere sunt deja prestabilite.",
                        "description3": "Toate partidele se vor desfășura în sistem trivia (conquistador).",
                        "description4": "Mulțumim și succes tuturor!",
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
                <!--Div folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({ pageLanguage: 'ro', includedLanguages: 'en,fr,de' }, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>

            <?php
                include_once 'footer.php';
            ?>
        </div>
    </body>
</html>