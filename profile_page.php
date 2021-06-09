<!DOCTYPE html>

<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

            <!--stiluri css folosite in pagina-->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/profile_page.css">

    <title>Profile | SuH</title> <!--titlul paginii-->
</head>

<body>
    <div id="root">
        <div class="page_wrapper">
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
            <main class="abstract" style="color: gold">
                <div class="row">
                    <div class="column">
                        <h1><a class="icon"><img src="./Images/red1.png"></a> </h1>
                        <?php
                        if (isset($_SESSION["uid"])) {
                        echo "<p class=\"description1\" style=\"color: gold\"><center>Nume utilizator: <br />".$_SESSION["userName"]."</center></p>";
                        }
                        ?>
                    </div>
                </div>

                <!--Div folosit pentru afisarea detaliilor profilului utilzatorului-->
                <div class="row" style="color: gold">
                    <div class="column">
                        <h2 class="description2" style="text-align:center">Detalii profil</h2>
                        <p class="description3"><center>
                            Nivel: 1

                        </p>
                         <?php
                    
                        $serverName = "localhost";
                        $dBUsername = "root";
                        $dBPassword = "";
                        $dbName = "suh";

                        $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName);

                        if (!$conn) {
                            die("Connection failed: ". mysqli_connect_error());
                        }

                        $count="SELECT DISTINCT Points FROM standings where uid= $_SESSION[uid]";

                        if($stmt = $conn->query($count)){
                            echo "<table>";

                            while ($row = $stmt->fetch_assoc()) {
                            echo "<tr><td>Experiență: $row[Points]/999</td></tr>";
                        }

                            echo "</table>";
                        }else
                        {
                            echo $conn->error;
                        }
                    ?>
                        <p></p>
                           
                        <!--Afisarea tarii utilizatorului din baza de date-->
                        <?php
                    
                        $serverName = "localhost";
                        $dBUsername = "root";
                        $dBPassword = "";
                        $dbName = "suh";

                        $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName);

                        if (!$conn) {
                            die("Connection failed: ". mysqli_connect_error());
                        }

                        $count="SELECT userCountry FROM users where uid= $_SESSION[uid]";

                        if($stmt = $conn->query($count)){
                            echo "<table>";

                            while ($row = $stmt->fetch_assoc()) {
                            echo "<tr><td>Țară: $row[userCountry]</td></tr>";
                        }

                            echo "</table>";
                        }else
                        {
                            echo $conn->error;
                        }
                    ?>
                    
                        <p class="description7">Localitate: <cite contenteditable="true">Iași</cite></p></center>
     </div>
    </form>
                </div>
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

        <!--PHP pentru afisarea footerului-->
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