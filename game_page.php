<!DOCTYPE html>

<html lang = "ro">
    <head>
        <title>Play! | SuH</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/NavigationBar.css">
    </head>

    <body>
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

                <main class="quiz_container" style="color: gold">
                    <div class="quiz_title">
                        <h1 class="quiz_title_header"> Cât de multe știi despre SuperHeroes? </h1>
                    </div>
                    <p id="question_text"> Ce culoare are costumul lui Spider Man? </p>
                    <form action="submission.html" method="POST">
                        <section class="answers">
                            <div class="options">
                                <input type=radio name="option" id="answer1" value="answer1" class="radio_button">
                                <label id="label" for="answer1">Roșu</label><br>
                            </div>
                            <div class="options">
                                <input type=radio name="option" id="answer2" value="answer1" class="radio_button">
                                <label id="label" for="answer2">Gri</label><br>
                            </div>
                            <div class="options">
                                <input type=radio name="option" id="answer1" value="answer1" class="radio_button">
                                <label id="label" for="answer1">Galben</label>
                            </div>
                        </section>
                    </form>
                    <p id="question_text"> Ce oraș este apărat de Batman? </p>
                    <form action="submission.html" method="POST">
                        <section class="answers">
                            <div class="options">
                                <input type=radio name="option" id="answer1" value="answer1" class="radio_button">
                                <label id="label" for="answer1">New York</label><br>
                            </div>
                            <div class="options">
                                <input type=radio name="option" id="answer2" value="answer1" class="radio_button">
                                <label id="label" for="answer2">Las Vegas</label><br>
                            </div>
                            <div class="options">
                                <input type=radio name="option" id="answer1" value="answer1" class="radio_button">
                                <label id="label" for="answer1">Gotham City</label>
                            </div>
                        </section>
                    </form>
                    <p id="question_text"> Cu cine se aseamănă Venom? </p>
                    <form action="submission.html" method="POST">
                        <section class="answers">
                            <div class="options">
                                <input type=radio name="option" id="answer1" value="answer1" class="radio_button">
                                <label id="label" for="answer1">Thor</label><br>
                            </div>
                            <div class="options">
                                <input type=radio name="option" id="answer2" value="answer1" class="radio_button">
                                <label id="label" for="answer2">Spider Man</label><br>
                            </div>
                            <div class="options">
                                <input type=radio name="option" id="answer1" value="answer1" class="radio_button">
                                <label id="label" for="answer3">Capitan America</label>
                            </div>
                        </section>

                        <section class="buttons">
                            <p>&nbsp;</p>
                            <a href="under_construction.html"><input type="button" value="Prev"></a>
                            &nbsp;
                            <a href="under_construction.html"><input type="submit" value="Submit"></a>
                            &nbsp;
                            <a href="under_construction.html"><input type="button" value="Next"></a>
                            <p>&nbsp;</p>
                        </section>
                    </form>
                </main>
            </div>
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
                        "topnav1": "Acasă",
                        "topnav2": "Logare",
                        "active": "Joacă!",
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
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({ pageLanguage: 'auto', layout: google.translate.TranslateElement.FloatPosition.TOP_RIGHT }, 'google_translate_element');
                    }
                </script>

                <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>
            <?php
                include_once 'footer.php'
            ?>
        </div>
    </body>
</html>
