<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>welcome <?php echo $_SESSION['username']; ?></h2>

	<button><a href="../logout">Logout</a></button>

	<a href="profile">Profile</a>
	<a href="user">User</a>
	<a href="post">Lost/Found</a>
	
</body>
</html>