﻿<!DOCTYPE html>

<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--stiluri css folosite in pagina-->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/rules_page.css">

    <title>Rules | SuH</title> <!--titlul paginii-->

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

            <main>

            <!--Div folosit pentru afisarea regulilor jocului-->
                <div class="rules_content">
                    <center>
                        <h1 class="titlu_regula" style="color: gold">Reguli</h1>
                        <h2 class="subtitlu_regula" style="color: gold">
                            Regulamentul complet și ghidul de utilizare îl puteți citi aici:
                        </h2>

                        <a href="under_construction.html" style="color: gold" ;>PDF</a> / <a href="under_construction.html" style="color: gold" ;>HTML</a>
                    </center>                    

                                    <!--Continutul regulilor-->
                    <div class="rules_container">
                        <ol style="color: gold">
                            <li class="regula1">Toate întrebările quiz-urilor sunt obligatorii.</li>
                            <li class="regula2">Fiecare răspuns corect valorează: 3 puncte (începator), 4 puncte (intermediar), 5 puncte (avansat).</li>
                            <li class="regula3">Răspunsurile greșite sunt penalizate cu -3 puncte.</li>
                            <li class="regula4">După trimiterea răspunsurilor NU se mai poate reveni la quiz-ul respectiv.</li>
                            <li class="regula5">Butoanele "Prev" / "Next" sunt folosite pentru a trece de la o întrebare la alta.</li>
                            <li class="regula6">Rezultatul quiz-ului este afișat după "Submit".</li>
                        </ol>
                    </div>
                </div>
            </main>

        </div>

        <!--Script folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
        <script>
            const langEl = document.querySelector('.langWrap');
            const link = document.querySelectorAll('a');
            const descrEl1 = document.querySelector('.titlu_regula');
            const descrEl2 = document.querySelector('.subtitlu_regula');
            const descrEl3 = document.querySelector('.regula1');
            const descrEl4 = document.querySelector('.regula2');
            const descrEl5 = document.querySelector('.regula3');
            const descrEl6 = document.querySelector('.regula4');
            const descrEl7 = document.querySelector('.regula5');
            const descrEl8 = document.querySelector('.regula6');
            const descrEl9 = document.querySelector('.topnav1');
            const descrEl10 = document.querySelector('.topnav2');
            const descrEl11 = document.querySelector('.topnav3');
            const descrEl12 = document.querySelector('.topnav4');
            const descrEl13 = document.querySelector('.topnav5');
            const descrEl14 = document.querySelector('.topnav6');
            const descrEl15 = document.querySelector('.topnav7');
            const descrEl16 = document.querySelector('.topnav8');
            const descrEl17 = document.querySelector('.active');

            link.forEach(el => {
                el.addEventListener('click', () => {
                    langEl.querySelector('.active').classList.remove('active');
                    el.classList.add('active');
                    const attr = el.getAttribute('language');


                    descrEl1.textContent = data[attr].titlu_regula;
                    descrEl2.textContent = data[attr].subtitlu_regula;
                    descrEl3.textContent = data[attr].regula1;
                    descrEl4.textContent = data[attr].regula2;
                    descrEl5.textContent = data[attr].regula3;
                    descrEl6.textContent = data[attr].regula4;
                    descrEl7.textContent = data[attr].regula5;
                    descrEl8.textContent = data[attr].regula6;
                    descrEl9.textContent = data[attr].topnav1;
                    descrEl10.textContent = data[attr].topnav2;
                    descrEl11.textContent = data[attr].topnav3;
                    descrEl12.textContent = data[attr].topnav4;
                    descrEl13.textContent = data[attr].topnav5;
                    descrEl14.textContent = data[attr].topnav6;
                    descrEl15.textContent = data[attr].topnav7;
                    descrEl16.textContent = data[attr].topnav8;
                    descrEl17.textContent = data[attr].active;
                });
            });

            var data = {

                "romanian":
                {
                    "titlu_regula": "Reguli",
                    "subtitlu_regula": "Regulamentul complet și ghidul de utilizare îl puteți citi aici:",
                    "regula1": "Toate întrebările quiz- urilor sunt obligatorii.",
                    "regula2": "Fiecare răspuns corect valorează: 3 puncte (începator), 4 puncte (intermediar), 5 puncte (avansat).",
                    "regula3": "Răspunsurile greșite sunt penalizate cu -3 puncte.",
                    "regula4": "După trimiterea răspunsurilor NU se mai poate reveni la quiz-ul respectiv.",
                    "regula5": "Butoanele PREV / NEXT sunt folosite pentru a trece de la o întrebare la alta.",
                    "regula6": "Rezultatul quiz-ului este afișat după SUBMIT.",
                    "topnav1": "Acasă",
                    "topnav2": "Logare",
                    "topnav3": "Joacă!",
                    "topnav4": "Galerie",
                    "topnav5": "Clasament",
                    "topnav6": "Profil",
                    "topnav7": "Contact",
                    "topnav8": "Despre",
                    "active": "Reguli",
                },

                "english":
                {
                    "titlu_regula": "Rules",
                    "subtitlu_regula": "The complete regulations and the user guide can be read here:",
                    "regula1": "All quiz questions are required.",
                    "regula2": "Each correct answer is worth: 3 points (beginner), 4 points (intermediate), 5 points (advanced).",
                    "regula3": "Wrong answers are penalized with -3 points.",
                    "regula4": "After sending the answers, it is NOT possible to return to the respective quiz.",
                    "regula5": "The PREV / NEXT buttons are used to switch from one question to another.",
                    "regula6": "The quiz result is displayed after SUBMIT.",
                    "topnav1": "Home",
                    "topnav2": "LogIn",
                    "topnav3": "Play!",
                    "topnav4": "Gallery",
                    "topnav5": "Ranking",
                    "topnav6": "Profile",
                    "topnav7": "Contact",
                    "topnav8": "About",
                    "active": "Rules",
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

        <!-- PHP folosit pentru afisarea footerului-->
        <?php
            include_once 'footer.php';
        ?>

                            <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
        <script type= "text/javascript" src= "./keyboard.js" > </script>

    </div>
</body>
</html>