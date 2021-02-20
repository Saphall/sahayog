<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>welcome <?php echo $_SESSION['username']; ?></h2>
	
</body>
</html>