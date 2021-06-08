<!DOCTYPE html>

<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/general.css">
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/gallery_page.css">
        <title>Gallery | SuH</title> <!--titlul paginii-->

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
                <main style="color: gold">
                    <div class="flex-container" style="color: gold">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p style="color: gold">Aquamen</p>
                                        <img src="<?php echo URLROOT;?>/public/Images/aquamen.jpg" width="150" height="150" alt="Aquamen">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Spider-Man</p>
                                        <img src="<?php echo URLROOT;?>/public/Images/spiderman.png" width="150" height="150" alt="Spider-Man">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Hulk</p>
                                        <img src="<?php echo URLROOT;?>/public/Images/hulk.jpg" width="150" height="150" alt="Hulk">
                                    </td>
                                </tr>
                        </table>
                    </div>
                    <div class="flex-container">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p style="color: gold">Superman</p>
                                        <img src="<?php echo URLROOT;?>/public/Images/superman.jpg" width="150" height="150" alt="Superman">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Batman</p>
                                        <img src="<?php echo URLROOT;?>/public/Images/batman.jpg" width="150" height="150" alt="Batman">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Wonder <br />Woman</p>

                                        <img src="<?php echo URLROOT;?>/public/Images/wonder_woman.jpg" width="150" height="150" alt="Wonder Woman">
                                    </td>
                                </tr>
                        </table>
                    </div>
                    <div class="flex-container">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p style="color: gold">Iron Man</p>
                                        <img src="<?php echo URLROOT;?>/public/Images/ironman.jpg" width="150" height="150" alt="Iron Man">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Thor</p>
                                        <img src="<?php echo URLROOT;?>/public/Images/thor.jpg" width="150" height="150" alt="Thor">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Flash</p>
                                        <img src="<?php echo URLROOT;?>/public/Images/flash.jpg" width="150" height="150" alt="Flash">
                                    </td>
                                </tr>
                        </table>
                    </div>
                </main>
            </div>
            <script>
                const langEl = document.querySelector('.langWrap');
                const link = document.querySelectorAll('a');
                const descrEl1 = document.querySelector('.topnav1');
                const descrEl2 = document.querySelector('.topnav2');
                const descrEl3 = document.querySelector('.topnav3');
                const descrEl4 = document.querySelector('.active');
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
                        descrEl3.textContent = data[attr].topnav3;
                        descrEl4.textContent = data[attr].active;
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
                        "topnav3": "Joacă!",
                        "active": "Galerie",
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
                        "topnav3": "Play!",
                        "active": "Gallery",
                        "topnav4": "Ranking",
                        "topnav5": "Profile",
                        "topnav6": "Contact",
                        "topnav7": "About",
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
                    require APPROOT . '/views/includes/footer.php'; 
            ?>
        </div>
    </body>
</html>