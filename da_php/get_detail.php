<?php

	include 'config.php';

	$pdo = new PDO('mysql:host=localhost;dbname=myapp_data;charset=utf8','root','root');
	
	$id = isset($_GET['id']) ? $_GET['id'] : 0;

	$stmt = $pdo->query('select * from articles where id = '.$id.' order by type desc');

	$data = $stmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($data);