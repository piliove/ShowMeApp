<?php

	include 'config.php';

	$pdo = new PDO('mysql:host=localhost;dbname=myapp_data;charset=utf8','root','root');
	
	$msg = isset($_GET['msg']) ? $_GET['msg'] : 0;
	
	$stmt = $pdo->query("select * from articles where title like '%$msg%' ");
	
	if($stmt == false){
		echo json_encode('暂无数据');
	} else {
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($data);
	}
	