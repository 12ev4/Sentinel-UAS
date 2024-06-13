<?php

session_start();

$_SESSION = array();

session_destroy();

header("Location: v_login.php");
exit();
?>