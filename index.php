<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Login auth</title>
</head>
<body>
	<?php include 'function.php';  ?>
	<div id='cevap'></div>
	<form id="gonderForm">
		<label>$PIN
		<input type="text" name="PIN"></label><BR><BR>
		<label>$NAME
		<input type="text" name="NAME"></label><BR><BR>
		<div id="gonder" style="border: 1px solid black; border-radius: 5px; background-color: grey;width:80px; height: 20px;text-align:center">Gönder</div>
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
</body>
</html>