<!DOCTYPE html>

<html lang="ro">
    <head>
        <title>LogIn | SuH</title> <!--titlul paginii-->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/login_page.css">
    </head>

    <body>
        <div id="root">
            <div class="page_wrapper">

            <!--PHP folosit pentru afisarea barii de navigare-->
                <?php
                    include_once 'navbar.php';
                ?>

                <div class="langWrap">
                <!--Div folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
                    <center>
                        <p style="color:ghostwhite">Language option</p>
                        <a href="#" language='romanian' style="color:greenyellow" class="active">RO</a>
                        <a href="#" language='english' style="color:greenyellow">EN</a>
                    </center>
                </div>
               
                <!--Div folosit pentru introducerea datelor la logare-->
                <main class="login_container" style="color: gold">
                    <div class="root_login">
                        <h1 class="description1">Înregistrați-vă și alăturați-vă supereroilor!</h1>
                        <div class="login_form">
                            <h2>Logare</h2>
                            <form action="includes/login.inc.php" method="post">
                                <label class="description2" for="username">Nume de utilizator:</label>
                                <br>
                                <input id="username" name="username" type="text">
                                <br>
                                <label class="description3" for="password">Parola:</label>
                                <br>
                                <input id="password" name="password" type="password" required minlength="8"> <!--Cerinta parolei e de minim 8 caractere-->
                                <br>
                                <button type="submit" name="submit">LogIn</button>
                            </form>
                        </div>

                        <!--PHP pentru validarea userului sau parolei-->
                        <?php
                            if(isset($_GET["error"]))
                                if($_GET["error"] == "emptyinput") {
                                    echo "<p class=\"signuperror\">Fill in all fields!</p>";
                                }
                                else if($_GET["error"] == "usernameinexistent") {
                                    echo "<p class=\"signuperror\">Wrong username!</p>";
                                }
                                else if($_GET["error"] == "wrongPassword") {
                                    echo "<p class=\"signuperror\">Wrong password!</p>";
                                }
                        ?>
                        
                        <!--Div pentru variantele de creare a fontului sau reamintire parola-->
                        <div class="login_register" style="color: gold">
                            <a class="description4" id="login_register_create" href="signup_page.php">Creează un cont</a>
                            <a class="description5" id="login_register_forgot" href="forgot_password.php">Ați uitat parola?</a>
                        </div>
                        <br>
                        
                        <!--Div pentru conectarea alternativa cu cont Google sau Facebook-->
                        <div class="alternative_register" style="color: gold">
                            <p class="description6">Sau înregistrați-vă și conectați-vă cu:</p>
                            <a label="facebook_login" class="icon" href="https://www.facebook.com/"><img src="./Images/LogIn_Facebook_icon.png"></a>
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
                 const descrEl1 = document.querySelector('.topnav1');
                const descrEl2 = document.querySelector('.active');
                const descrEl3 = document.querySelector('.topnav2');
                const descrEl4 = document.querySelector('.topnav3');
                const descrEl5 = document.querySelector('.topnav4');
                const descrEl6 = document.querySelector('.topnav5');
                const descrEl7 = document.querySelector('.topnav6');
                const descrEl8 = document.querySelector('.topnav7');
                const descrEl9 = document.querySelector('.description1');
                const descrEl10 = document.querySelector('.description2');
                const descrEl11 = document.querySelector('.description3');
                const descrEl12 = document.querySelector('.description4');
                const descrEl13 = document.querySelector('.description5');
                const descrEl14 = document.querySelector('.description6');
               

                link.forEach(el => {
                    el.addEventListener('click', () => {
                        langEl.querySelector('.active').classList.remove('active');
                        el.classList.add('active');

                        const attr = el.getAttribute('language');

                        
                        descrEl1.textContent = data[attr].topnav1;
                        descrEl2.textContent = data[attr].active;
                        descrEl3.textContent = data[attr].topnav2;
                        descrEl4.textContent = data[attr].topnav3;
                        descrEl5.textContent = data[attr].topnav4;
                        descrEl6.textContent = data[attr].topnav5;
                        descrEl7.textContent = data[attr].topnav6;
                        descrEl8.textContent = data[attr].topnav7;
                        descrEl9.textContent = data[attr].description1;
                        descrEl10.textContent = data[attr].description2;
                        descrEl11.textContent = data[attr].description3;
                        descrEl12.textContent = data[attr].description4;
                        descrEl13.textContent = data[attr].description5;
                        descrEl14.textContent = data[attr].description6;
                    });
                });

                var data = {

                    "romanian":
                    {
                        "description1": "Înregistrați-vă și alăturați-vă supereroilor!",
                        "description2": "Nume de utilizator:",
                        "description3": "Parola:",
                        "description4": "Creează un cont",
                        "description5": "Ați uitat parola?",
                        "description6": "Sau înregistrați-vă și conectați-vă cu:",
                        "topnav1": "Acasă",
                        "active": "Logare",
                        "topnav2": "Joacă!",
                        "topnav3": "Galerie",
                        "topnav4": "Clasament",
                        "topnav8": "Profil",
                        "topnav5": "Contact",
                        "topnav6": "Despre",
                        "topnav7": "Reguli",
                    },

                    "english":
                    {
                        "description1": "Register and join the superheroes!",
                        "description2": "Username:",
                        "description3": "Password:",
                        "description4": "Create an account",
                        "description5": "Forgot your password?",
                        "description6": "Or register and log in with:",
                        "topnav1": "Home",
                        "active": "LogIn",
                        "topnav2": "Play!",
                        "topnav3": "Gallery",
                        "topnav4": "Ranking",
                        "topnav7": "Profile",
                        "topnav5": "Contact",
                        "topnav6": "About",
                        "topnav7": "Rules",
                    }
                }
            </script>

            <div class="international">
                <!-- Div folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
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
                include_once 'footer.php';
            ?>
            <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS valid!" />
    </a>
</p>

        </div>

                            <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
        <script type= "text/javascript" src= "./keyboard.js" > </script>

    </body>
</html>
