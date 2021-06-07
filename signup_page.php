<!DOCTYPE html>

<html lang="ro">
    <head>
        <title>SignUp | SuH</title> <!--titlul paginii-->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/NavigationBar.css">
        <link rel="stylesheet" href="./css/signup_page.css">
        <link rel="stylesheet" href="./css/footer.css">

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

                        <!--Div pentru inregistrarea utilizatorilor noi-->
                <main class="signin_container" style="color: gold">
                    <div class="root_signin">
                        <h1 class="description1">Înregistrați-vă și alăturați-vă supereroilor!</h1>
                        <div class="signin_form">
                            <h2 class="description2">Înscrie-te</h2>
                            <form action="includes/signup.inc.php" method="post">
                                <label for="email">E-mail:</label>
                                <br>
                                <input id="email" name="email" type="text">
                                <br>
                                <label class="description3" for="username">Nume de utilizator:</label>
                                <br>
                                <input id="username" name="username" type="text">
                                <br>
                                <label class="description4" for="password">Parola:</label>
                                <br>
                                <input id="password" name="password" type="password" required minlength="8"> <!--Cerinta parolei e de minim 8 caractere-->
                                <br>
                                <label class="description5" for="passwordRepeat">Idem Parola:</label>
                                <br>
                                <input id="passwordRepeat" name="passwordRepeat" type="password"  required minlength="8"> <!--Cerinta parolei e de minim 8 caractere-->
                                <br>
                                <label for="country">Tara:</label>
                                <br>
                                <input id="country" name="country" type="text">
                                <br>
                                <button type="submit" name="submit">SignUp</button>
                            </form>
                        </div>

                                <!--PHP folosit pentru inregistrarea utilizatorilor-->
                        <?php
                            if(isset($_GET["error"]))
                                if($_GET["error"] == "emptyinput") {
                                    echo "<p class=\"signuperror\">Fill in all fields! </p>";
                                }
                                else if($_GET["error"] == "invalidEmail") {
                                    echo "<p class=\"signuperror\">Email is invalid! </p>";
                                }
                                else if($_GET["error"] == "invalidUsername") {
                                    echo "<p class=\"signuperror\">Fill the username field! </p>";
                                }
                                else if($_GET["error"] == "passwordsDontMatch") {
                                    echo "<p class=\"signuperror\">Passwords don't match! </p>";
                                }
                                else if($_GET["error"] == "userNameExists") {
                                    echo "<p class=\"signuperror\">Username already exists! </p>";
                                }
                                else if($_GET["error"] == "none") {
                                    echo "<p class=\"signuperror\">Registration succesfull!</p>";
                                }
                        ?>
                     
                                <!--Div folosit pentru optiunile cont existent sau uitarea parolei-->
                        <div class="login_register" style="color: gold">
                            <a class="description5" id="login_register_create" href="login_page.php">Ai deja un cont</a>
                            <a class="description6" id="login_register_forgot" href="forgot_password.php">Ați uitat parola?</a>
                        </div>
                        <br>
                                                    
                        <!-- Conectare alternativa pe pagina jocului cu contul Google sau Facebook-->
                        <div class="alternative_register" style="color: gold">
                            <p class="description7">Sau înregistrați-vă și conectați-vă cu:</p>
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
                const descrEl5 = document.querySelector('.description5');
                const descrEl6 = document.querySelector('.description6');
                const descrEl7 = document.querySelector('.description7');
                const descrEl8 = document.querySelector('.topnav1');
                const descrEl9 = document.querySelector('.active');
                const descrEl10 = document.querySelector('.topnav2');
                const descrEl11 = document.querySelector('.topnav3');
                const descrEl12 = document.querySelector('.topnav4');
                const descrEl13 = document.querySelector('.topnav5');
                const descrEl14 = document.querySelector('.topnav6');
                const descrEl15 = document.querySelector('.topnav7');
                const descrEl16 = document.querySelector('.topnav8');

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
                        descrEl7.textContent = data[attr].description7;
                        descrEl8.textContent = data[attr].topnav1;
                        descrEl9.textContent = data[attr].active;
                        descrEl10.textContent = data[attr].topnav2;
                        descrEl11.textContent = data[attr].topnav3;
                        descrEl12.textContent = data[attr].topnav4;
                        descrEl13.textContent = data[attr].topnav5;
                        descrEl14.textContent = data[attr].topnav6;
                        descrEl15.textContent = data[attr].topnav7;
                        descrEl16.textContent = data[attr].topnav8;
                    });
                });

                var data = {

                    "romanian":
                    {
                        "description1": "Înregistrați-vă și alăturați-vă supereroilor!",
                        "description2": "Înscrie-te",
                        "description3": "Nume de utilizator:",
                        "description4": "Parola:",
                        "description5": "Creează un cont",
                        "description6": "Ați uitat parola?",
                        "description7": "Sau înregistrați-vă și conectați-vă cu:",
                        "topnav1": "Acasă",
                        "active": "Înscriere",
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
                        "description1": "Register and join the superheroes!",
                        "description2": "Register",
                        "description3": "Username:",
                        "description4": "Password:",
                        "description5": "Create an account",
                        "description6": "Forgot your password?",                    
                        "description7": "Or register and log in with:",
                        "topnav1": "Home",
                        "active": "SignIn",
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

            <!--API folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
            <div class="international">
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


                                <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
            <script type= "text/javascript" src= "./keyboard.js" > </script>

        </div>
    </body>
</html>
