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
				 <?php 

            require '../Auth/connection.php';
            $user = $_SESSION['id'];
            $query = "SELECT u.username as username, u.email as email, CONCAT(d.first_name,' ',d.middle_name, ' ', d.last_name) as fullname, d.dob as dob, d.gender as gender, d.address1 as address1, d.address2 as address2 from users as u left join details as d on u.detail=d.id where u.id=$user and u.type='user'";
            

            $result=mysqli_query($conn,$query);

            // $row_count = mysqli_num_rows($result);
            $profile=mysqli_fetch_assoc($result)
            ?>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-200 border-b border-white">
				<div class="w-40 font-semibold pl-2">Full Name:</div>
				<div><?php echo $profile['fullname']; ?></div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-100 border-b border-white">
				<div class="w-40 font-semibold pl-2">Age:</div>
				<div><?php echo $profile['dob']; ?></div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-100 border-b border-white">
				<div class="w-40 font-semibold pl-2">Gender:</div>
				<div><?php echo $profile['gender']; ?></div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-200 border-b border-white mt-5">
				<div class="w-40 font-semibold pl-2">Permanent Address:</div>
				<div><?php echo $profile['address1']; ?></div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-100 border-b border-white">
				<div class="w-40 font-semibold pl-2">Temporary Address:</div>
				<div><?php echo $profile['address2']; ?></div>
			</div>      
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-200 border-b border-white mt-5">
				<div class="w-40 font-semibold pl-2">Email:</div>
				<div><?php echo $profile['email'] ?></div>
			</div>
			<!-- Lorem Ipsum -->
			<div class="flex flex-wrap gap-x-3 p-1 bg-gray-100 border-b border-white">
				<div class="w-40 font-semibold pl-2">Username:</div>
				<div><?php echo $profile['username']; ?></div>
			</div>      
			</div>
		</div>
	</div>

</body>
</html>