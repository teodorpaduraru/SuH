<!DOCTYPE html>

<html lang="ro">
    <head>
        <title>LogIn | SuH</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/login_page.css">
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
                                <input id="password" name="password" type="password" required minlength="8">
                                <br>
                                <button type="submit" name="submit">LogIn</button>
                            </form>
                        </div>

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
                        
                        <div class="login_register" style="color: gold">
                            <a class="description4" id="login_register_create" href="signup_page.php">Creează un cont</a>
                            <a class="description5" id="login_register_forgot" href="forgot_password.html">Ați uitat parola?</a>
                        </div>
                        <br>
                        <div class="alternative_register" style="color: gold">
                            <p class="description6">Sau înregistrați-vă și conectați-vă cu:</p>
                            <a label="facebook_login" class="icon" href="https://www.facebook.com/"><img src="./Images/LogIn_Facebook_icon.png"></a>
                            <a class="icon" href="https://accounts.google.com/ServiceLogin/identifier?hl=ro&passive=true&continue=https%3A%2F%2Fwww.google.com%2F&ec=GAZAmgQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="./Images/LogIn_Google_icon.png"></a>
                        </div>
                    </div>

                    <div class="login_info_display"> </div>
                </main>
            </div>
            <script>
                const langEl = document.querySelector('.langWrap');
                const link = document.querySelectorAll('a');
                const descrEl1 = document.querySelector('.description1');
                const descrEl2 = document.querySelector('.description2');
                const descrEl3 = document.querySelector('.description3');
                const descrEl4 = document.querySelector('.description4');
                const descrEl5 = document.querySelector('.description5');
                const descrEl6 = document.querySelector('.description6');
                const descrEl7 = document.querySelector('.topnav1');
                const descrEl8 = document.querySelector('.active');
                const descrEl9 = document.querySelector('.topnav2');
                const descrEl10 = document.querySelector('.topnav3');
                const descrEl11 = document.querySelector('.topnav4');
                const descrEl12 = document.querySelector('.topnav5');
                const descrEl13 = document.querySelector('.topnav6');
                const descrEl14 = document.querySelector('.topnav7');
                const descrEl15 = document.querySelector('.topnav8');

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
                        descrEl6.textContent = data[attr].description6;
                        descrEl7.textContent = data[attr].topnav1;
                        descrEl8.textContent = data[attr].active;
                        descrEl9.textContent = data[attr].topnav2;
                        descrEl10.textContent = data[attr].topnav3;
                        descrEl11.textContent = data[attr].topnav4;
                        descrEl12.textContent = data[attr].topnav5;
                        descrEl13.textContent = data[attr].topnav6;
                        descrEl14.textContent = data[attr].topnav7;
                        descrEl15.textContent = data[attr].topnav8;
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
                        "description1": "Register and join the superheroes!",
                        "description2": "Username:",
                        "description3": "Password:",
                        "description4": "Create an account",
                        "description5": "Forgot your password?",
                        "description6": "Or register and log in with:",
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
                <!-- Div folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
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
