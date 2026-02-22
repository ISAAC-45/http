<?php
$archivo = "contador.txt";
$count = file_exists($archivo) ? (int)file_get_contents($archivo) : 0;
$count++;
file_put_contents($archivo, $count);
echo "<h1>Contador amb Arxiu: $count</h1>";
?>
