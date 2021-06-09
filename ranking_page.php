<!DOCTYPE html>

<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/ranking_page.css">
        
        <title>Ranking | SuH</title> <!--titlul paginii-->
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
                <main>
                                   

                                   <!--PHP folosit pentru preluarea datelor din tabelul standings din SQL si afisarea clasamentelor-->
                <table>
                <caption style="color: gold">Clasament general</caption>
                <tr>
                    <th class="description1" style="color: gold">Nume utilizator</th>
                    <th class="description2" style="color: gold">Punctaj</th>
                </tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "suh");
                    
                    // Verificarea conexiunii la baza de date
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT DISTINCT * FROM standings, users where standings.uid = users.uid ORDER BY Points desc";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    
                    // Afisarea clasamentului general in ordinea descrescatoare a punctelor
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["userName"]. "</td><td>" . $row["Points"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else 
                    { echo "</table>";}
                    $conn->close();
                ?>
                </table>


                <table>
                <caption style="color: gold">Clasament pe tari</caption>
                    <tr>
                        <th class="description3" style="color: gold">Nume de utilizator</th>
                        <th class="description4" style="color: gold">Punctaje</th>
                        <th class="description5" style="color: gold">Țara</th>
                    </tr>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "suh");
                        
                        // Verificarea conexiunii la baza de date
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT DISTINCT * FROM standings, users where standings.uid = users.uid ORDER BY userCountry asc, Points desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        
                        // Afisarea punctajelor in ordinea alfabetica a tarilor si descrescatoare a punctelor
                            while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["userName"]. "</td><td>" . $row["Points"] . "</td><td>" . $row["userCountry"]. "</td></tr>";
                        }
                        echo "</table>";
                        } 
                        else { echo "</table>";}
                        $conn->close();
                    ?>
                </table>
                </main>
            </div>

                            <!--Script folosit pentru traducerea paginii in romana si engleza-->
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
                const descrEl10 = document.querySelector('.description1');
                const descrEl11 = document.querySelector('.description2');
                const descrEl12 = document.querySelector('.description3');
                const descrEl13 = document.querySelector('.description4');
                const descrEl14 = document.querySelector('.description5');

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
                        descrEl10.textContent = data[attr].description1;
                        descrEl11.textContent = data[attr].description2;
                        descrEl12.textContent = data[attr].description3;
                        descrEl13.textContent = data[attr].description4;
                        descrEl14.textContent = data[attr].description5;
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
                        "description1": "Nume utilizator",
                        "description2": "Punctaje",
                        "description3": "Nume utilizator",
                        "description4": "Punctaje",
                        "description5": "Țara",
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
                        "description1": "Username",
                        "description2": "Points",
                        "description3": "Username",
                        "description4": "Points",
                        "description5": "Country",
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