<?php 
try {
	$db = new PDO("mysql:host=localhost;dbname=online;charset=utf8","root", "");
	$PIN='11111111';
} catch (PDOException $e) {
	print_r($e->getMessage());
}
function selected($pin) {
	Global $db;
$user=$db->query("SELECT * FROM login WHERE PIN='{$pin}'", PDO::FETCH_ASSOC);
	if($user->rowCount()) {
		foreach ($user as $val) {
			echo $val['NAME'];	
		}
	}
}


if(@$GET['go']=='insert') {
	$name=$_POST['NAME'];
	$pin=$_POST['PIN'];
	// Böyle bir pın var mı? Kontrol edilmeli
	$insert=$db->prepare('INSERT INTO online SET NAME=? PIN=?');
	$insert->execute(array($name,$pin));
	if($insert){
		echo 'Bekleyiniz!';
	}
}

