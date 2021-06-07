<!DOCTYPE html>

<html lang = "ro">
    <head>
        <title>Play! | SuH</title>   <!--titlul paginii-->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/NavigationBar.css">
        <link rel="stylesheet" href="./css/game_page.css">
    </head>

    <body>
        <div id="root">
            <div class="page_wrapper">
                            <!--PHP folosit pentru afisarea barii de navigare-->
                <?php
                    include_once 'navbar.php';
                ?>

                                <!--Div folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
                <div class="langWrap">
                    <center>
                        <p style="color:ghostwhite">Language option</p>
                        <a href="#" language='romanian' style="color:greenyellow" class="active">RO</a>
                        <a href="#" language='english' style="color:greenyellow">EN</a>
                    </center>
                </div>

                                <!--Alegerea nivelului de joc-->
                <main class="quiz_container" style="color: gold">
                    <form action="submission.html" method="POST">
                        <p class="quiz_title">Alege un nivel de experiență:</p>
                        <section class="buttons">
                            <p>&nbsp;</p>
                                    <!--butoanele pentru alegerea nivelului de joc-->
                            <a class="buton1" style="color: floralwhite" href="beginner.php"><input type="button" value="Începător"></a>
                            &nbsp;&nbsp;
                            <a class="buton2" style="color: floralwhite" href="intermediate.php"><input type="button" value="Intermediar"></a>
                            &nbsp;&nbsp;
                            <a class="buton3" style="color: floralwhite" href="expert.php"><input type="button" value="Avansat"></a>
                            <p>&nbsp;</p>
                        </section>
                    </form>
                </main>
            </div>

            <!--Script folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
            <script>
                const langEl = document.querySelector('.langWrap');
                const link = document.querySelectorAll('a');
                const descrEl1 = document.querySelector('.topnav1');
                const descrEl2 = document.querySelector('.active');
                const descrEl3 = document.querySelector('.topnav3');
                const descrEl4 = document.querySelector('.topnav4');
                const descrEl5 = document.querySelector('.topnav5');
                const descrEl6 = document.querySelector('.topnav6');
                const descrEl7 = document.querySelector('.topnav7');
                const descrEl8 = document.querySelector('.topnav8');
                const descrEl9 = document.querySelector('.topnav9');
                const descrEl10 = document.querySelector('.quiz_title');
                const descrEl11 = document.querySelector('.buton1');
                const descrEl12 = document.querySelector('.buton2');
                const descrEl13 = document.querySelector('.buton3');

                link.forEach(el => {
                    el.addEventListener('click', () => {
                        langEl.querySelector('.active').classList.remove('active');
                        el.classList.add('active');

                        const attr = el.getAttribute('language');


                       
                        descrEl1.textContent = data[attr].topnav1;
                        descrEl2.textContent = data[attr].active;
                        descrEl3.textContent = data[attr].topnav3;
                        descrEl4.textContent = data[attr].topnav4;
                        descrEl5.textContent = data[attr].topnav5;
                        descrEl6.textContent = data[attr].topnav6;
                        descrEl7.textContent = data[attr].topnav7;
                        descrEl8.textContent = data[attr].topnav8;
                        descrEl9.textContent = data[attr].topnav9;
                        descrEl10.textContent = data[attr].quiz_title;
                        descrEl11.textContent = data[attr].buton1;
                        descrEl12.textContent = data[attr].buton2;
                        descrEl13.textContent = data[attr].buton3;
                    });
                });

                var data = {

                    "romanian":
                    {
                        "topnav1": "Acasă",
                        "active": "Joacă!",
                        "topnav3": "Galerie",
                        "topnav4": "Clasament",
                        "topnav5": "Contact",
                        "topnav6": "Despre",
                        "topnav7": "Reguli",
                        "topnav8": "Profil",
                        "topnav9": "Logare",
                        "quiz_title": "Alege un nivel de experiență:",
                        "buton1": "Începător",
                        "buton2": "Intermediar",
                        "buton3": "Avansat",
                    },

                    "english":
                    {
                        "topnav1": "Home",   
                        "active": "Play!",
                        "topnav3": "Gallery",
                        "topnav4": "Ranking",
                        "topnav5": "Contact",
                        "topnav6": "About",
                        "topnav7": "Rules",
                        "topnav8": "Profile",
                        "topnav9": "LogIn",
                        "quiz_title": "Choose an experience level:",
                        "buton1": "Beginner",
                        "buton2": "Medium",
                        "buton3": "Expert",
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
                include_once 'footer.php'
            ?>
        </div>

                            <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
        <script type= "text/javascript" src= "./keyboard.js" > </script>

    </body>
</html>
