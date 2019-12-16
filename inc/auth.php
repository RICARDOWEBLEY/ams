<?php
if(!isset($_SESSION['username'])){
    header("Location: index.php");

    if (isset($_SESSION['username'])) {
        header("Location: dashboard.php");
    }
}