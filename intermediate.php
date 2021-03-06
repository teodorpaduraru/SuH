<!DOCTYPE html>

<html lang="ro">
<head>
    <title>Play! | SuH</title>  <!--titlul paginii-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--stiluri css folosite in pagina-->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/game_page.css">
    <link rel="stylesheet" href="./css/NavigationBar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="root">
        <div class="page_wrapper">
            <!--Div folosit pentru afisarea barii de navigare-->
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

            <!--Continutul jocului la nivel intermediar-->
            <main class="quiz_container" style="color: gold">
                <div class="quiz__body">
                    <header class="quiz__header">
                        <div id="timer" class="quiz__header--block"> Time: <strong>60</strong> </div>
                        <div id="score" class="quiz__header--block"> Score: <strong>0</strong> </div>
                        <div id="hiScore" class="quiz__header--block"> High Score: <strong>0</strong> </div>
                        <h1 class="quiz__header--title"> Heroes Quiz! </h1>
                    </header>
                    <div id="question" class="quiz__question"></div>
                    <div id="response" class="quiz__response"></div>
                    <div id="result" class="quiz__result"></div>
                    <div id="info" class="quiz__info"></div>
                    <div class="quiz__button--container">
                        <a href="./index.php"><input type="button" id="home" value="Home" class="quiz__button"></a>
                        <button id="start" class="quiz__button"> Start new quiz </button>
                    </div>
                </div>
            </main>
            <script src="./dist/intermediate.js"></script>  <!--scriptul folosit pentru nivelul intermediar-->
        </div>

        <!--Script folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
        <script>
            const langEl = document.querySelector('.langWrap');
            const link = document.querySelectorAll('a');
            const descrEl1 = document.querySelector('.topnav1');
            const descrEl2 = document.querySelector('.topnav2');
            const descrEl3 = document.querySelector('.active');
            const descrEl4 = document.querySelector('.topnav3');
            const descrEl5 = document.querySelector('.topnav4');
            const descrEl6 = document.querySelector('.topnav5');
            const descrEl7 = document.querySelector('.topnav6');
            const descrEl8 = document.querySelector('.topnav7');
            const descrEl9 = document.querySelector('.topnav8');

            link.forEach(el => {
                el.addEventListener('click', () => {
                    langEl.querySelector('.active').classList.remove('active');
                    el.classList.add('active');

                    const attr = el.getAttribute('language');



                    descrEl1.textContent = data[attr].topnav1;
                    descrEl2.textContent = data[attr].topnav2;
                    descrEl3.textContent = data[attr].active;
                    descrEl4.textContent = data[attr].topnav3;
                    descrEl5.textContent = data[attr].topnav4;
                    descrEl6.textContent = data[attr].topnav5;
                    descrEl7.textContent = data[attr].topnav6;
                    descrEl8.textContent = data[attr].topnav7;
                    descrEl9.textContent = data[attr].topnav8;
                });
            });

            var data = {

                "romanian":
                {
                    "topnav1": "Acas??",
                    "topnav2": "Logare",
                    "active": "Joac??!",
                    "topnav3": "Galerie",
                    "topnav4": "Clasament",
                    "topnav5": "Profil",
                    "topnav6": "Contact",
                    "topnav7": "Despre",
                    "topnav8": "Reguli",
                },
                "english":
                {
                    "topnav1": "Home",
                    "topnav2": "LogIn",
                    "active": "Play!",
                    "topnav3": "Gallery",
                    "topnav4": "Ranking",
                    "topnav5": "Profile",
                    "topnav6": "Contact",
                    "topnav7": "About",
                    "topnav8": "Rules",
                }
            }
        </script>


        <div class="international">
            <!--API folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
            <div id="google_translate_element"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({ pageLanguage: 'ro', includedLanguages: 'en,fr,de,it,es' }, 'google_translate_element');
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
