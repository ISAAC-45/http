<?php
session_start();
$_SESSION['count'] = isset($_SESSION['count']) ? $_SESSION['count'] + 1 : 1;
echo "<h1>Contador amb Sesió: " . $_SESSION['count'] . "</h1>";
?>
