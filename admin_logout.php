<?php

session_start();
unset($_SESSION['username']);
header("Location: admin_login.php");
session_destroy();

?>
