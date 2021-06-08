<?php

function emptyInputSignUp($email, $username, $password) {

    $return;

    if(empty($email) || empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function invalidUsername($username) {
    $result;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email) {
    $result;
    var_dump($email);


    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
        echo $email;
    }
    else {
        $result = false;
    }

    return $result;
}

function invalidPassword($password){
    $result;

    if(!preg_match("/^(.{0,7}|[^a-z]*|[^\d]*)$/i", password)) {
        $result = true;
    }
    else {
        $result = false;
    }
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    
    if($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function userNameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup_page.php?error=stmtFaileduserNameExist");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $password, $email) {
    $sql = "INSERT INTO users (userName, userPassword, userEmail) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup_page.php?error=stmtFailedcreateUser");
        exit();
    }

    $hasedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $hasedPwd, $email);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup_page.php?error=none");
}

function emptyInputLogIn($username, $password) {
    $result;
    if(empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function loginUser($conn, $username, $password) {
    $userNameExists = userNameExists($conn, $username, $username);

    if($userNameExists == false) {
        header("location: ../login_page.php?error=usernameInexistent");
        exit();
    }

    $passwordHash = $userNameExists["userPassword"];
    $checkPassword = password_verify($password, $passwordHash);

    if($checkPassword === false) {
        header("location: ../login_page.php?error=wrongPassword");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["userName"] = $userNameExists["userName"];
        $_SESSION["uid"] = $userNameExists["uid"];
        header("location: ../index.php");
        exit();
    }
}