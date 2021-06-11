<!DOCTYPE html>

<html lang="ro">
    <head>
        <title>SignUp | SuH</title> <!--titlul paginii-->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/general.css">
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/signup_page.css">
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

                        <!--Div pentru inregistrarea utilizatorilor noi-->
                <main class="signin_container" style="color: gold">
                    <div class="root_signin">
                        <h1 class="description1">Înregistrați-vă și alăturați-vă supereroilor!</h1>
                        <div class="signin_form">
                            <h2 class="description2">Înscrie-te</h2>
                            <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                                <label for="email">E-mail:</label>
                                <br>
                                <input id="email" name="userEmail" type="text">
                                <span class="signuperror">
                                    <br>
                                    <?php echo $data['emailError']; ?>
                                </span>
                                <br>
                                <label class="description3" for="username">Nume de utilizator:</label>
                                <br>
                                <input id="username" name="userName" type="text">
                                <span class="signuperror">
                                    <br>
                                    <?php echo $data['usernameError']; ?>
                                </span>
                                <br>
                                <label class="description4" for="password">Parola:</label>
                                <br>
                                <input id="password" name="userPassword" type="password">
                                <span class="signuperror">
                                    <br>
                                    <?php echo $data['passwordError']; ?>
                                </span>
                                <br>
                                <label class="description5" for="passwordRepeat">Idem Parola:</label>
                                <br>
                                <input id="passwordRepeat" name="confirmPassword" type="password">
                                <span class="signuperror">
                                    <br>
                                    <?php echo $data['confirmPasswordError']; ?>
                                </span>
                                <br>
                                <button type="submit" name="submit">SignUp</button>
                            </form>
                        </div>
                        
                                <!--Div folosit pentru optiunile cont existent sau uitarea parolei-->
                        <div class="login_register" style="color: gold">
                            <a class="description5" id="login_register_create" href="<?php echo URLROOT; ?>/users/login">Ai deja un cont</a>
                            <a class="description6" id="login_register_forgot" href="<?php echo URLROOT; ?>/users/forgot_password">Ați uitat parola?</a>
                        </div>
                        <br>
                        <!-- Conectare alternativa pe pagina jocului cu contul Google sau Facebook-->
                        <div class="alternative_register" style="color: gold">
                            <p class="description7">Sau înregistrați-vă și conectați-vă cu:</p>
                            <a label="facebook_login" class="icon" href="https://www.facebook.com/"><img src="<?php echo URLROOT;?>/public/Images/LogIn_Facebook_icon.png"></a>
                            <a class="icon" href="https://accounts.google.com/ServiceLogin/identifier?hl=ro&passive=true&continue=https%3A%2F%2Fwww.google.com%2F&ec=GAZAmgQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="<?php echo URLROOT;?>/public/Images/LogIn_Google_icon.png"></a>
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
                    require APPROOT . '/views/includes/footer.php'; 
            ?>

            <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
            <script type= "text/javascript" src="<?php echo URLROOT;?>/public/scripts/keyboard.js" > </script>

        </div>
    </body>
</html>
