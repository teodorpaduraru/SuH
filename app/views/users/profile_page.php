<!DOCTYPE html>

<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--stiluri css folosite in pagina-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/general.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/profile_page.css">
    <title>Profile | SuH</title> <!--titlul paginii-->

</head>

<body>
    <div id="root">
        <div class="page_wrapper">
            <!--Div folosit pentru afisarea barii de navigare-->
            <?php
                require APPROOT . '/views/includes/navbar.php'; 
            ?>
            <div class="langWrap">
                <center>
                    <p style="color:ghostwhite">Language option</p>
                    <a href="#" language='romanian' style="color:greenyellow" class="active">RO</a>
                    <a href="#" language='english' style="color:greenyellow">EN</a>
                </center>
            </div>
            <main class="abstract" style="color: gold">
                <div class="row">
                    <div class="column">
                        <h1><a class="icon"><img src="<?php echo URLROOT; ?>/public/Images/red1.png"></a> </h1>
                        <p class="description1">
                            Username:
                            <br>               
                            <?php
                                echo $_SESSION["userName"];
                            ?>
                        </p>
                    </div>
                </div>
                <div class="row" style="color: gold">
                    <div class="column">
                        <h2 class="description2" style="text-align:center">Profile details</h2>
                        <?php
                        if(isset($_SESSION['admin'])) {
                            if($_SESSION['admin']) {
                                echo "<a href=\"".URLROOT . "/admins/c_panel\" id=\"button\">To Admin</a>";
                            }
                        }
                        ?>
                        <p class="description3">
                            Nivel: <?php echo $data['userLevel']; ?>
                        </p>
                        <p class="description4">Experiență: <?php  echo $data['userExperience'] ?> </p>
                        <p class="description6">Țară: România</p>
                        <p class="description7">Localitate: Iași</p>
                    </div>
                </div>
            </main>
        </div>
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
                    "description1": "Nume de utilizator:",
                    "description2": "Detalii profil",
                    "description3": "Nivel",
                    "description4": "Experiență:",
                    "description5": "Victorii/Înfrângeri:",
                    "description6": "Țară:",
                    "description7": "Localitate:",
                    "topnav1": "Acasă",
                    "topnav2": "Logare",
                    "topnav3": "Joacă!",
                    "topnav4": "Galerie",
                    "topnav5": "Clasament",
                    "active": "Profil",
                    "topnav6": "Contact",
                    "topnav7": "Despre",
                    "topnav8": "Reguli",
                },
                
                "english":
                {
                    "description1": "Username:",
                    "description2": "Profile details",
                    "description3": "Level:",
                    "description4": "Experience:",
                    "description5": "Victories / Defeats:",
                    "description6": "Country:",
                    "description7": "City:",
                    "topnav1": "Home",
                    "topnav2": "LogIn",
                    "topnav3": "Play!",
                    "topnav4": "Gallery",
                    "topnav5": "Ranking",
                    "active": "Profile",
                    "topnav6": "Contact",
                    "topnav7": "About",
                    "topnav8": "Rules",
                }
            }
        </script>

        <!--PHP pentru afisarea footerului-->
        <?php
            require APPROOT . '/views/includes/footer.php'; 
        ?>
    </div>
                        <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
        <script type= "text/javascript" src= "./keyboard.js" > </script>

</body>
</html>