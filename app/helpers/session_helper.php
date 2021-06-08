<?php
    session_start();

    function isLoggedIn() {
        if (isset($_SESSION['uid'])) {
            return true;
        } else {
            return false;
        }
    }
