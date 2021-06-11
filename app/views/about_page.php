<!DOCTYPE html>

<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/general.css">
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/about_page.css">
        <title>About | SuH</title> <!--titlul paginii-->

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
                                <!--descrierea pe scurt a jocului-->
                    <p class="description1" style="color: gold">SuperHeroes Web Game (pe scurt: SuH) este un joc Web educativ destinat adolescenților.</p>
                    <p class="description2" style="color: gold">
                        Jocul conține un scenariu, o miză și condițiile de victorie/înfrângere prestabilite pentru fiecare rundă.
                    </p>
                    <p class="description3" style="color: gold">
                        Pentru o interacțiune mai plăcută și mult mai atractivă, toate partidele jucate vor fi de tipul trivia (conquistador).
                    </p>
                    <p class="description4" style="color: gold">
                        Vă mulțumim că ați ales jocul nostru și vă dorim o experiență inedită!
                    </p>
                    <p class="description5" style="color: gold">
                        Echipa: Teodor Păduraru și Eugen Gavrilovici
                    </p>
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
                const descrEl5 = document.querySelector('.description5');
                const descrEl6 = document.querySelector('.topnav1');
                const descrEl7 = document.querySelector('.topnav2');
                const descrEl8 = document.querySelector('.topnav3');
                const descrEl9 = document.querySelector('.topnav4');
                const descrEl10 = document.querySelector('.topnav5');
                const descrEl11 = document.querySelector('.topnav6');
                const descrEl12 = document.querySelector('.topnav7');
                const descrEl13 = document.querySelector('.active');
                const descrEl14 = document.querySelector('.topnav8');

                link.forEach(el => {
                    el.addEventListener('click', () => {
                        langEl.querySelector('.active').classList.remove('active');
                        el.classList.add('active');

                        const attr = el.getAttribute('language');


                        descrEl1.textContent = data[attr].description1;
                        descrEl2.textContent = data[attr].description2;
                        descrEl3.textContent = data[attr].description3;
                        descrEl4.textContent = data[attr].description4;
                        descrEl5.textContent = data[attr].description5;
                        descrEl6.textContent = data[attr].topnav1;
                        descrEl7.textContent = data[attr].topnav2;
                        descrEl8.textContent = data[attr].topnav3;
                        descrEl9.textContent = data[attr].topnav4;
                        descrEl10.textContent = data[attr].topnav5;
                        descrEl11.textContent = data[attr].topnav6;
                        descrEl12.textContent = data[attr].topnav7;
                        descrEl13.textContent = data[attr].active;
                        descrEl14.textContent = data[attr].topnav8;
                    });
                });

                var data = {

                    "romanian":
                    {
                        "description1": "SuperHeroes Web Game (pe scurt: SuH) este un joc Web educativ destinat adolescenților.",
                        "description2": "Jocul conține un scenariu, o miză și condițiile de victorie/înfrângere prestabilite pentru fiecare rundă.",
                        "description3": "Pentru o interacțiune mai plăcută și mult mai atractivă, toate partidele jucate vor fi de tipul trivia (conquistador).",
                        "description4": "Vă mulțumim că ați ales jocul nostru și vă dorim o experiență inedită!",
                        "description5": "Echipa: Teodor Păduraru și Eugen Gavrilovici",
                        "topnav1": "Acasă",
                        "topnav2": "Logare",
                        "topnav3": "Joacă!",
                        "topnav4": "Galerie",
                        "topnav5": "Clasament",
                        "topnav6": "Profil",
                        "topnav7": "Contact",
                        "active": "Despre",
                        "topnav8": "Reguli",
                    },
                    "english":
                    {
                        "description1": "SuperHeroes Web Game (short: SuH) is an educational web game for teens.",
                        "description2": "The game contains a scenario, a stake and the default victory / defeat conditions for each round.",
                        "description3": "For a more pleasant and much more attractive interaction, all the games played will be of the trivia type (conquistador).",
                        "description4": "Thank you for choosing our game and we wish you a unique experience!",
                        "description5": "Team: Teodor Păduraru and Eugen Gavrilovici",
                        "topnav1": "Home",
                        "topnav2": "LogIn",
                        "topnav3": "Play!",
                        "topnav4": "Gallery",
                        "topnav5": "Ranking",
                        "topnav6": "Profile",
                        "topnav7": "Contact",
                        "active": "About",
                        "topnav8": "Rules",
                    }
                }
            </script>

            <div class="international">
                <!-- API folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
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
                require APPROOT . '/views/includes/footer.php'; 
            ?>
        </div>
      <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
      <script type= "text/javascript" src="<?php echo URLROOT;?>/public/scripts/keyboard.js" > </script>
    </body>
</html>