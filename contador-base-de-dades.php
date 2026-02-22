<?php
$db = new SQLite3('contador.db');
$db->exec("CREATE TABLE IF NOT EXISTS visitas (id INTEGER PRIMARY KEY, total INTEGER)");
$res = $db->querySingle("SELECT total FROM visitas WHERE id = 1");
$total = $res ? $res + 1 : 1;
if ($res) { $db->exec("UPDATE visites SET total = $total WHERE id = 1"); }
else { $db->exec("INSERT INTO visites (id, total) VALUES (1, 1)"); }
echo "<h1>Contador amb BD: $total</h1>";
?>
