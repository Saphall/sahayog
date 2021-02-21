<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahayog - Helping people find their lost ones!</title>
    <link rel="stylesheet" href="../CSS/style.css">
	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/pray.png" type="image/x-icon">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fb9d3931c2.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="flex flex-wrap">
		<!-- sidebar -->
        <?php require 'includes/sidebar.php'; ?>

		<div class="pt-5 sm:pt-0 flex-grow">
			<div class="w-full bg-gray-300 p-2 font-semibold">User Profile</div>

			<?php include 'includes/success.php'; ?>
            <?php include 'includes/error.php'; ?>
            
			<div class="mt-5 py-5 text-sm">
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-200 border-b border-white">
				<div class="w-40 font-semibold pl-2">Full Name:</div>
				<div>Hari Sharma</div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-100 border-b border-white">
				<div class="w-40 font-semibold pl-2">Age:</div>
				<div>32</div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-200 border-b border-white">
				<div class="w-40 font-semibold pl-2">Date of Birth:</div>
				<div>1988-07-21</div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-100 border-b border-white">
				<div class="w-40 font-semibold pl-2">Gender:</div>
				<div>Male</div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-200 border-b border-white mt-5">
				<div class="w-40 font-semibold pl-2">Permanent Address:</div>
				<div>Gatthaghar, Bhaktapur</div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-100 border-b border-white">
				<div class="w-40 font-semibold pl-2">Temporary Address:</div>
				<div>Gatthaghar, Bhaktapur</div>
			</div>      
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-200 border-b border-white mt-5">
				<div class="w-40 font-semibold pl-2">Email:</div>
				<div>hari.sharma@gmail.com</div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-100 border-b border-white">
				<div class="w-40 font-semibold pl-2">Username:</div>
				<div>hari.sharma</div>
			</div>      
			</div>
		</div>
	</div>

</body>
</html>