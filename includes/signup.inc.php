<?php

if(isset($_POST["submit"]))
{

    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    // echo $email." ".$username." ".$password." ".$passwordRepeat;

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignUp($email, $username, $password) !== false) {
        header("location: ../signup_page.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup_page.php?error=invalidEmail");
        exit();
    }

    if (invalidUsername($username) !== false) {
        header("location: ../signup_page.php?error=invalidUsername");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup_page.php?error=passwordsDontMatch");
        exit();
    }

    if(userNameExists($conn, $username, $email) !== false) {
        header("location: ../signup_page.php?error=userNameExists");
        exit();
    }

    createUser($conn, $username, $password, $email);
}
else {
    header("location: ../signup_page.php");
    exit();
}