<?php

$pdo = new PDO('mysql:host=localhost;dbname=curriculo', "root", "");

$sql = 'SELECT id FROM dados';

foreach ($pdo->query($sql) as $row) {
    echo $row["id"] . "\t";
}
?>


