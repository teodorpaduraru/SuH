<!DOCTYPE html>

<html lang="ro">

<head>
    <title>Cpanel</title> <!--titlu pagina-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/cpanel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


    <div class="navigare">
        <div class="text-bara">
            <!--Titlul sectiunii apelate-->
            <span class="text_bara">Administrare site</span>
        </div>
        <ul class="nav-links">
            <li></li>
            <li></li>
            <li></li>
            <li>
                <a href="<?php echo URLROOT; ?>/admins/c_panel" class="active">
                    <!--Linkul afiseaza administratorii-->
                    <span class="text_bara">Administratori</span>
                </a>
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li>
                <a href="<?php echo URLROOT; ?>/admins/c_useri">
                    <!--Linkul va afisa userii din baza de date-->
                    <span class="text_bara">Useri</span>
                </a>
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li>
                <a href="<?php echo URLROOT; ?>/admins/c_supereroi">
                    <!--Linkul va afisa supereroii din baza de date-->
                    <span class="text_bara">Supereroi</span>
                </a>
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li>
                <a href="<?php echo URLROOT; ?>/admins/c_clasament">
                    <!--Linkul va afisa clasamentul din baza de date-->
                    <span class="text_bara">Clasament</span>
                </a>
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="log_out">
                <a href="<?php echo URLROOT; ?>/pages/index_page">
                    <!--Linkul duce la pagina principala a jocului-->
                    <span class="text_bara">Iesire</span>
                </a>
            </li>

        </ul>
        <p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                     src="http://jigsaw.w3.org/css-validator/images/vcss"
                     alt="CSS valid!" />
            </a>
        </p>
    </div>

    <!--Afisarea administratorilor-->
    <section class="home">
        <nav>
            <div class="navigare-buton">
                <span class="casete">Administratori</span>
            </div>
            <div class="cautare">
                <input type="text" placeholder="Cautare...">
            </div>
            <div class="profil">
                <img src="<?php echo URLROOT;?>/images/Teodor.jpg" alt="">
                <span class="administrator">Teodor Paduraru</span>
            </div>
            <div class="profil">
                <img src="<?php echo URLROOT;?>/images/Eugen.jpg" alt="">
                <span class="administrator">Eugen Gavrilovici</span>
            </div>
        </nav>

        <!--Setarea drepturilor administratorilor-->
        <div class="setari">
            <div class="casete">
                <div class="box">
                    <div class="titlu">
                        <div class="drepturi">
                            <div class="titlu">Teodor Paduraru (drepturi)</div>
                            <p></p>
                            <div class="text-drepturi">Sterge</div>&nbsp;<input type="checkbox">
                            <p></p>
                            <div class="text-drepturi">Adauga</div>&nbsp;<input type="checkbox">
                            <p></p>
                            <div class="text-drepturi">Modifica</div>&nbsp;<input type="checkbox">
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="setari2">
            <div class="casete">
                <div class="box">
                    <div class="titlu">
                        <div class="drepturi">
                            <div class="titlu">Eugen Gavrilovici (drepturi)</div>
                            <p></p>
                            <div class="text-drepturi">Sterge</div>&nbsp;<input type="checkbox">
                            <p></p>
                            <div class="text-drepturi">Adauga</div>&nbsp;<input type="checkbox">
                            <p></p>
                            <div class="text-drepturi">Modifica</div>&nbsp;<input type="checkbox">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>





    <script>
        //script folosit navigarea prin meniul de administrare
        let navigare = document.querySelector(".navigare");
        let navigareBtn = document.querySelector(".navigareBtn");
        navigareBtn.onclick = function () {
            navigare.classList.toggle("active");
            if (navigare.classList.contains("active")) {
                navigareBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                navigareBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>