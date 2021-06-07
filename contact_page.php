<!DOCTYPE html>

<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                        
        <!--stiluri css folosite in pagina-->
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/NavigationBar.css">
        <link rel="stylesheet" href="./css/contact_page.css">
        <link rel="stylesheet" href="./css/footer.css">
                        
        <title>Contact | SuH</title>  <!--titlul paginii-->

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
                    
                <!-- API folosit pentru afisarea locatiei pe harta-->
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div style='width:90%;'>
                        <div id='gmap_canvas' style='height:100%;width:100%;border-radius: 20px;'></div>
                    </div>

                    <script>function init_map() { var myOptions = { zoom: 10, center: new google.maps.LatLng(47.173620, 27.574710), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(47.173620, 27.574710) }); infowindow = new google.maps.InfoWindow({ content: '<strong>FII</strong><br />Facultatea de Informatica Iasi<br />' }); google.maps.event.addListener(marker, 'click', function () { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map);</script>

                    <div class="suh-columns" style="color: gold">
                        <!-- Detalii de contact-->
                        <p class="description1" style="text-align: center; color: gold">

                            Telefon: (+40) 744 741 398
                        </p>
                        <p class="description2" style="color: gold">Trimiteți un e-mail la: &nbsp;<a href="mailto:our-mail@mail.com" style="color: gold"> our-mail@mail.com</a></p>
                        <p class="description3" style="color: gold">
                            Dacă aveți probleme cu jocul, vă rugăm să trimiteți un e-mail la adresa de mai sus.
                        </p>
                        <p class="description4" style="color: gold">
                            În cazul în care nu primiți un răspuns rapid, vă rugăm să sunați la numărul afișat pentru a fi ajutat de unul dintre colegii noștri.
                            </p>
                        <p class="description5" style="color: gold">
                            Program lucru operatori:
                        </p>
                        <p class="description6" style="color: gold">    
                            Luni - Vineri: 9 AM - 5 PM
                        </p>
                        <p class="description7" style="color: gold">
                            Sâmbătă: 10 AM - 2 PM
                        </p>
                        <p class="description8" style="color: gold">
                            Duminică: Închis
                        </p>

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
                const descrEl8 = document.querySelector('.description8');
                const descrEl9 = document.querySelector('.topnav1');
                const descrEl10 = document.querySelector('.topnav2');
                const descrEl11 = document.querySelector('.topnav3');
                const descrEl12 = document.querySelector('.topnav4');
                const descrEl13 = document.querySelector('.topnav5');
                const descrEl14 = document.querySelector('.topnav6');
                const descrEl15 = document.querySelector('.active');
                const descrEl16 = document.querySelector('.topnav7');
                const descrEl17 = document.querySelector('.topnav8');

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
                        descrEl8.textContent = data[attr].description8;
                        descrEl9.textContent = data[attr].topnav1;
                        descrEl10.textContent = data[attr].topnav2;
                        descrEl11.textContent = data[attr].topnav3;
                        descrEl12.textContent = data[attr].topnav4;
                        descrEl13.textContent = data[attr].topnav5;
                        descrEl14.textContent = data[attr].topnav6;
                        descrEl15.textContent = data[attr].active;
                        descrEl16.textContent = data[attr].topnav7;
                        descrEl17.textContent = data[attr].topnav8;
                    });
                });

                var data = {

                    "romanian":
                    {
                        "description1": "Telefon: (+40) 744 741 398",
                        "description2": "Trimiteți un e-mail la:   our-mail@mail.com",
                        "description3": "Dacă aveți probleme cu jocul, vă rugăm să trimiteți un e‑mail la adresa de mai sus.",
                        "description4": "În cazul în care nu primiți un răspuns rapid, vă rugăm să sunați la numărul afișat pentru a fi ajutat de unul dintre colegii noștri.",
                        "description5": "Program lucru operatori:",
                        "description6": "Luni - Vineri: 9 AM - 5 PM",
                        "description7": "Sâmbătă: 10 AM - 2 PM",
                        "description8": "Duminică: Închis",
                        "topnav1": "Acasă",
                        "topnav2": "Logare",
                        "topnav3": "Joacă!",
                        "topnav4": "Galerie",
                        "topnav5": "Clasament",
                        "topnav6": "Profil",
                        "active": "Contact",
                        "topnav7": "Despre",
                        "topnav8": "Reguli",
                    },

                    "english":
                    {
                        "description1": "Phone: (+40) 744 741 398",
                        "description2": "Send an email to:   our-mail@mail.com",
                        "description3": "If you have problems with the game, please send an e-mail to the above address.",
                        "description4": "If you do not receive a quick response, please call the number shown to be assisted by one of our colleagues.",
                        "description5": "Operator work schedule:",
                        "description6": "Monday - Friday: 9 AM - 5 PM",
                        "description7": "Saturday: 10 AM - 2 PM",
                        "description8": "Sunday: Closed",
                        "topnav1": "Home",
                        "topnav2": "LogIn",
                        "topnav3": "Play!",
                        "topnav4": "Gallery",
                        "topnav5": "Ranking",
                        "topnav6": "Profile",
                        "active": "Contact",
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
                        new google.translate.TranslateElement({ pageLanguage: 'ro', includedLanguages: 'en,fr,de' }, 'google_translate_element');
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

    </body>
</html>