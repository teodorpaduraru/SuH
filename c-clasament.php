<!DOCTYPE html>

<html lang="ro">

<head>
    <title>Cpanel | Clasament</title> <!--titlu pagina-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/cpanel.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


    <div class="navigare">
        <div class="text-bara">
            <!--Titlul sectiunii apelate-->
            <span class="text_bara">Clasament</span>
        </div>
        <ul class="nav-links">
            <li></li>
            <li></li>
            <li></li>
            <li>
                <a href="./cpanel.php">
                    <!--Linkul afiseaza administratorii-->
                    <span class="text_bara">Administratori</span>
                </a>
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li>
                <a href="./c-useri.php">
                    <!--Linkul va afisa userii din baza de date-->
                    <span class="text_bara">Useri</span>
                </a>
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li>
                <a href="./c-supereroi.php">
                    <!--Linkul va afisa supereroii din baza de date-->
                    <span class="text_bara">Supereroi</span>
                </a>
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li>
                <a href="./c-clasament.php" class="active">
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
                <a href="./index.php">
                    <!--Linkul duce la pagina principala a jocului-->
                    <span class="text_bara">Iesire</span>
                </a>
            </li>
        </ul>
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
                <img src="./images/Teodor.jpg" alt="">
                <span class="administrator">Teodor Paduraru</span>
            </div>
            <div class="profil">
                <img src="./images/Eugen.jpg" alt="">
                <span class="administrator">Eugen Gavrilovici</span>
            </div>
        </nav>
        
        <!--Modificarea/stergerea rezultatelor din clasamente-->
        <div class="setari">
            <div class="casete">
                <div class="box">
                            
                        <table>
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