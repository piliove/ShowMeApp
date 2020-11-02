<?php

include 'config.php';

$pdo = new PDO('mysql:host=localhost;dbname=myapp_data;charset=utf8','root','root');

$stmt = $pdo->query('select * from articles order by type desc');

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
