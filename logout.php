<?php
require_once 'inc/sessions.php';
session_destroy();
header("Location: index.php");

?>