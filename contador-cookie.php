<?php
$valor = isset($_COOKIE['contador']) ? $_COOKIE['contador'] + 1 : 1;
setcookie('contador', $valor, time() + 3600);
echo "<h1>Contador amb Cookie: $valor</h1>";
?>
