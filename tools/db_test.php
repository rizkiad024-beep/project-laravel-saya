<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=web', 'root', '');
    $res = $pdo->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN);
    echo "OK: " . count($res) . " tables\n";
    foreach ($res as $t) echo "- $t\n";
} catch (Exception $e) {
    echo 'ERR: ' . $e->getMessage() . "\n";
}
