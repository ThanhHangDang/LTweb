<?php
    session_start();
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    unset($_SESSION['role']);
    header("location: ./../index.php");
?>