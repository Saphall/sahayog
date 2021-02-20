<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahayog - Helping people find their lost ones!</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/fb9d3931c2.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	
	<div class="flex flex-wrap">
		<!-- sidebar -->
        <?php require 'includes/sidebar.php'; ?>
		<div class="pt-5 sm:pt-0 flex-grow">
			<div class="w-full bg-gray-300 p-2 font-semibold">Registered Users</div>

			<?php include 'includes/success.php'; ?>
            <?php include 'includes/error.php'; ?>
            
			<div class="mt-5 p-5 text-sm" align="center">
				<table class="w-full">
					<tr>
						<th class="px-3">Name</th>
						<th class="px-3">Gender</th>
						<th class="px-3">DOB</th>
						<th class="px-3">Email</th>
						<th class="px-3">Username</th>
						<th class="px-3">Actions</th>
					</tr>
					<tr class="text-center">
						<td>Hari Sharma</td>
						<td>Male</td>
						<td>1998-07-21</td>
						<td>hari.sharma@gmail.com</td>
						<td>hari.sharma</td>
						<td>
							<span class="text-yellow-500">
							<a href="#">View</a>
							</span>
							<span class="text-blue-700">
							<a href="#">Edit</a>
							</span>
							<span class="text-red-700">
							<a href="#">Delete</a>
							</span>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>


<script src="JS/app.js"></script>
</body>

</html>