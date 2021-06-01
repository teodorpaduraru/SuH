<!DOCTYPE html>

<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/ranking_page.css">
        <title>Ranking | SuH</title>
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
                <main>
                    <div class="container" style="color: gold">
                        <table>
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Andrei</td>
                                    <td>100 pct.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Eugen</td>
                                    <td>85 pct.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Teodor</td>
                                    <td>75 pct.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Paul</td>
                                    <td>50 pct.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ionut</td>
                                    <td>45 pct.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Florin</td>
                                    <td>40 pct.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Ioana</td>
                                    <td>35 pct.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Mihai</td>
                                    <td>30 pct.</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Cristi</td>
                                    <td>25 pct.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Laur</td>
                                    <td>20 pct.</td>
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
                const descrEl4 = document.querySelector('.topnav4');
                const descrEl5 = document.querySelector('.active');
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
                        descrEl4.textContent = data[attr].topnav4;
                        descrEl5.textContent = data[attr].active;
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
                        "topnav4": "Galerie",
                        "active": "Clasament",
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
                        "topnav4": "Gallery",
                        "active": "Ranking",
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
                include_once 'footer.php';
            ?>
        </div>
    </body>
</html>