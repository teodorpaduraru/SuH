<!DOCTYPE html>

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
                        <!--Legaturi catre Ghidul de utilizare si Regulament in format PDF si HTML-->
                        <a href="./Documentatie/Regulament_manual_utilizare.pdf" style="color: gold" ;>PDF</a> / <a href="./Documentatie/Regulament_manual_utilizare.html" style="color: gold" ;>HTML</a>
                    </center>                    

                                    <!--Continutul regulilor-->
                    <div class="rules_container">
                        <ol style="color: gold">
                            <li class="regula1">Toate întrebările quiz-urilor sunt obligatorii.</li>
                            <li class="regula2">Fiecare răspuns corect valorează: 3 puncte (începator), 4 puncte (intermediar), 5 puncte (avansat).</li>
                            <li class="regula3">Răspunsurile greșite nu primesc nici un punct.</li>
                            <li class="regula4">După expirarea timpului NU se mai poate reveni la quiz-ul respectiv.</li>
                            <li class="regula5">Alegerea răspunsului comută automat la următoarea întrebare.</li>
                            <li class="regula6">Rezultatul fiecărei întrebări din quiz este afișat imediat după alegerea răspunsului.</li>
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
            const descrEl10 = document.querySelector('.topnav9');    
            const descrEl11 = document.querySelector('.topnav2');
            const descrEl12 = document.querySelector('.topnav3');
            const descrEl13 = document.querySelector('.topnav4');
            const descrEl14 = document.querySelector('.topnav5');
            const descrEl15 = document.querySelector('.topnav6');
            const descrEl16 = document.querySelector('.active');
            const descrEl17 = document.querySelector('.topnav8');

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
                    descrEl10.textContent = data[attr].topnav9;
                    descrEl11.textContent = data[attr].topnav2;
                    descrEl12.textContent = data[attr].topnav3;
                    descrEl13.textContent = data[attr].topnav4;
                    descrEl14.textContent = data[attr].topnav5;
                    descrEl15.textContent = data[attr].topnav6;
                    descrEl16.textContent = data[attr].active;
                    descrEl17.textContent = data[attr].topnav8;
                });
            });

            var data = {

                "romanian":
                {
                    "titlu_regula": "Reguli",
                    "subtitlu_regula": "Regulamentul complet și ghidul de utilizare îl puteți citi aici:",
                    "regula1": "Toate întrebările quiz- urilor sunt obligatorii.",
                    "regula2": "Fiecare răspuns corect valorează: 3 puncte (începator), 4 puncte (intermediar), 5 puncte (avansat).",
                    "regula3": "Răspunsurile greșite nu primesc nici un punct.",
                    "regula4": "După expirarea timpului NU se mai poate reveni la quiz-ul respectiv.",
                    "regula5": "Alegerea răspunsului comută automat la următoarea întrebare.",
                    "regula6": "Rezultatul fiecărei întrebări din quiz este afișat imediat după alegerea răspunsului.",
                    "topnav1": "Acasă",
                    "topnav8": "Profil",
                    "topnav9": "Logare",
                    "topnav2": "Joacă!",
                    "topnav3": "Galerie",
                    "active": "Clasament",
                    "topnav5": "Contact",
                    "topnav6": "Despre",
                    "topnav7": "Reguli",
                },

                "english":
                {
                    "titlu_regula": "Rules",
                    "subtitlu_regula": "The complete regulations and the user guide can be read here:",
                    "regula1": "All quiz questions are required.",
                    "regula2": "Each correct answer is worth: 3 points (beginner), 4 points (intermediate), 5 points (advanced).",
                    "regula3": "Wrong answers get no points.",
                    "regula4": "After the time expires, it is NOT possible to return to the respective quiz.",
                    "regula5": "Choosing the answer automatically switches to the next question.",
                    "regula6": "The result of each question in the quiz is displayed immediately after choosing the answer.",
                    "topnav1": "Home",
                    "topnav8": "Profile",
                    "topnav9": "LogIn",
                    "topnav2": "Play!",
                    "topnav3": "Gallery",
                    "active": "Ranking",
                    "topnav5": "Contact",
                    "topnav6": "About",
                    "topnav7": "Rules",
                }
            }
        </script>
        
        <div class="international">
            <!-- API folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
            <div id="google_translate_element"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({ pageLanguage: 'ro', includedLanguages: 'en,fr,de,it,es' }, 'google_translate_element');
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
        <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS valid!" />
    </a>
</p>
    </div>
</body>
</html>