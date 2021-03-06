<!DOCTYPE html>

<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

                <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/gallery_page.css">
                
        <title>Gallery | SuH</title> <!--titlul paginii-->

    </head>

    <body>
        <div id="root">
            <div class="page_wrapper">
                            <!--PHP folosit pentru afisarea barii de navigare-->
                <?php
                    include_once "navbar.php";
                ?>

                                <!--Div folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
                <div class="langWrap">
                    <center>
                        <p style="color:ghostwhite">Language option</p>
                        <a href="#" language='romanian' style="color:greenyellow" class="active">RO</a>
                        <a href="#" language='english' style="color:greenyellow">EN</a>
                    </center>
                </div>

                                <!--Afisarea galeriei unora dintre eroii din joc-->
                <main style="color: gold">

                    <div class="flex-container" style="color: gold">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p style="color: gold">Aquamen</p>
                                        <img src="./Images/aquamen.jpg" width="150" height="150" alt="Aquamen">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Spider-Man</p>
                                        <img src="./Images/spiderman.png" width="150" height="150" alt="Spider-Man">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Hulk</p>
                                        <img src="./Images/hulk.jpg" width="150" height="150" alt="Hulk">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
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
                                        <img src="./Images/superman.jpg" width="150" height="150" alt="Superman">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Batman</p>
                                        <img src="./Images/batman.jpg" width="150" height="150" alt="Batman">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Wonder <br />Woman</p>

                                        <img src="./Images/wonder_woman.jpg" width="150" height="150" alt="Wonder Woman">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
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
                                        <img src="./Images/ironman.jpg" width="150" height="150" alt="Iron Man">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Thor</p>
                                        <img src="./Images/thor.jpg" width="150" height="150" alt="Thor">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: gold">Flash</p>
                                        <img src="./Images/flash.jpg" width="150" height="150" alt="Flash">  <!--alt este folosit pentru accesibilitate ca sa apara numele cand nu se vede imaginea-->
                                    </td>
                                </tr>
                        </table>
                    </div>
                </main>
            </div>

                        <!--Script folosit pentru traducerea (internationalizarea) site-ului in romana si engleza-->
            <script>
                const langEl = document.querySelector('.langWrap');
                const link = document.querySelectorAll('a');
                const descrEl1 = document.querySelector('.topnav1');
                const descrEl2 = document.querySelector('.topnav9');
                const descrEl3 = document.querySelector('.topnav2');
                const descrEl4 = document.querySelector('.active');
                const descrEl5 = document.querySelector('.topnav4');
                const descrEl6 = document.querySelector('.topnav5');
                const descrEl7 = document.querySelector('.topnav6');
                const descrEl8 = document.querySelector('.topnav7');

                link.forEach(el => {
                    el.addEventListener('click', () => {
                        langEl.querySelector('.active').classList.remove('active');
                        el.classList.add('active');

                        const attr = el.getAttribute('language');

                        descrEl1.textContent = data[attr].topnav1;
                        descrEl2.textContent = data[attr].topnav9;
                        descrEl3.textContent = data[attr].topnav2;
                        descrEl4.textContent = data[attr].active;
                        descrEl5.textContent = data[attr].topnav4;
                        descrEl6.textContent = data[attr].topnav5;
                        descrEl7.textContent = data[attr].topnav6;
                        descrEl8.textContent = data[attr].topnav7;
                    });
                });

                var data = {

                    "romanian":
                    {
                        "topnav1": "Acasă",
                        "topnav9": "Logare",
                        "topnav2": "Joacă!",
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
                        "topnav9": "LogIn",
                        "topnav2": "Play!",
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
                <!-- API folosit pentru traducerea (internationalizarea) site-ului in alte limbi-->
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
        </div>

        
                    <!--Script folosit pentru accesibilitate folosind tastatura in locul mouseului-->
        <script type= "text/javascript" src= "./keyboard.js" > </script>
        <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS valid!" />
    </a>
</p>
       
    </body>
</html>