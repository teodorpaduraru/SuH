<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogIn($username, $password) !== false) {
        header("location: ../login_page.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $username, $password);
}
else {
    header("location: ../login_page.php");
}
