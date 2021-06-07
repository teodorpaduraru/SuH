<!DOCTYPE html>

<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--stiluri css folosite in pagina-->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/login_page.css">
    <title>Forgot Password | SuH</title> <!--titlul paginii-->

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

            <main class="login_container" style="color: gold">
                <div class="root_login">

                                            <!--Div folosit pentru recuperarea contului-->
                    <h1 class="description1">Recuperează-ți contul de supererou!</h1>
                    <div class="login_form">
                        <form action="index.html" method="post">
                            <label class="description2" for="email">E-mail sau nume de utilizator:</label>
                            <br>
                            <input id="email" name="email" type="email">
                            <br>
                            <input id="submit" type="submit" value="Send Recovery Email">
                        </form>
                    </div>

                                                <!--Div folosit daca are deja un cont-->
                    <div class="login_register" style="color: gold">
                        <a class="description3" id="login_register_create" href="login_page.html">Ai deja un cont</a>
                    </div>
                    <br>

                    <div class="alternative_register" style="color: gold">
                                    <!-- Conectare alternativa pe pagina jocului-->
                        <p class="description4">Sau înregistrați-vă și conectați-vă cu:</p>
                        <a class="icon" href="https://www.facebook.com/"><img src="./Images/LogIn_Facebook_icon.png"></a>
                        <a class="icon" href="https://accounts.google.com/ServiceLogin/identifier?hl=ro&passive=true&continue=https%3A%2F%2Fwww.google.com%2F&ec=GAZAmgQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="./Images/LogIn_Google_icon.png"></a>
                    </div>
                </div>

                <div class="login_info_display"> </div>
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
            const descrEl5 = document.querySelector('.topnav1');
            const descrEl6 = document.querySelector('.active');
            const descrEl7 = document.querySelector('.topnav2');
            const descrEl8 = document.querySelector('.topnav3');
            const descrEl9 = document.querySelector('.topnav4');
            const descrEl10 = document.querySelector('.topnav5');
            const descrEl11 = document.querySelector('.topnav6');
            const descrEl12 = document.querySelector('.topnav7');
            const descrEl13 = document.querySelector('.topnav8');

            link.forEach(el => {
                el.addEventListener('click', () => {
                    langEl.querySelector('.active').classList.remove('active');
                    el.classList.add('active');

                    const attr = el.getAttribute('language');


                    descrEl1.textContent = data[attr].description1;
                    descrEl2.textContent = data[attr].description2;
                    descrEl3.textContent = data[attr].description3;
                    descrEl4.textContent = data[attr].description4;
                    descrEl5.textContent = data[attr].topnav1;
                    descrEl6.textContent = data[attr].active;
                    descrEl7.textContent = data[attr].topnav2;
                    descrEl8.textContent = data[attr].topnav3;
                    descrEl9.textContent = data[attr].topnav4;
                    descrEl10.textContent = data[attr].topnav5;
                    descrEl11.textContent = data[attr].topnav6;
                    descrEl12.textContent = data[attr].topnav7;
                    descrEl13.textContent = data[attr].topnav8;
                });
            });

            var data = {

                "romanian":
                {
                    "description1": "Recuperează-ți contul de supererou!",
                    "description2": "E-mail sau nume de utilizator:",
                    "description3": "Ai deja un cont",
                    "description4": "Sau înregistrați-vă și conectați-vă cu:",
                    "topnav1": "Acasă",
                    "active": "Recuperare",
                    "topnav2": "Joacă!",
                    "topnav3": "Galerie",
                    "topnav4": "Clasament",
                    "topnav5": "Profil",
                    "topnav6": "Contact",
                    "topnav7": "Despre",
                    "topnav8": "Reguli",
                },

                "english":
                {
                    "description1": "Recover your superhero account!",
                    "description2": "Email or username:",
                    "description3": "You already have an account",
                    "description4": "Or register and log in with:",
                    "topnav1": "Home",
                    "active": "Recovery",
                    "topnav2": "Play!",
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
            include_once 'footer.php';
        ?>

    </div>

                        <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
        <script type= "text/javascript" src= "./keyboard.js" > </script>

    </body>
</html>