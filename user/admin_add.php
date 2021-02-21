<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Sahayog - Helping people find their lost ones!</title>
	 <link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/pray.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fb9d3931c2.js" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="flex flex-wrap">
		<!-- sidebar -->
        <?php require 'includes/sidebar.php'; ?>
		<div class="pt-5 sm:pt-0 flex-grow">
			<div class="w-full bg-gray-300 p-2 font-semibold">Registered Users</div>

			<?php include 'includes/success.php'; ?>
            <?php include 'includes/error.php'; ?>

            <a class="bg-blue-300 shadow font-medium px-3 py-1 rounded-full" href="admin_add">Add Admin</a>
            
			<div class="mt-5 p-5 text-sm" align="center">
				<form action="admin_add_action.php" method="POST">
					<p>
						<label for="">username</label>
						<input type="text" name="username">
					</p>
					<p>
						<label for="">email</label>
						<input type="email" name="email">
					</p>
					<p>
						<label for="">password</label>
						<input type="text" name="password">
					</p>
					<p>
						<label for="">password2</label>
						<input type="text" name="password2">
					</p>


					<input type="submit" name="btn_add" value="Add Admin">
				</form>
			</div>
		</div>
	</div>


<script src="../JS/app.js"></script>
</body>

</html>