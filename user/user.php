<?php 
session_start();
 ?>
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

            <!-- <a class="bg-blue-300 shadow font-medium px-3 py-1 rounded-full" href="admin_add">Add User</a> -->

			<div class="mt-5 p-5 text-sm" align="center">
				<table class="w-full">
					<tr>
						<th class="px-3">S.N.</th>
						<th class="px-3">Username</th>
						<th class="px-3">Email</th>
						<th class="px-3">Gender</th>
						<th class="px-3">Mobile</th>
						<th class="px-3">Actions</th>
					</tr>
					<?php 

					require '../Auth/connection.php';
					$query = "SELECT u.username as username, u.email as email, d.mobile as mobile, d.gender as gender from users as u left join details as d on u.detail=d.id where u.type='user'";
					$result=mysqli_query($conn,$query);

	                $row_count = mysqli_num_rows($result);
	                  // echo $row_count;

	                if ($result && $row_count>0) {
	                    
	                $i=0; 
	                while ($user=mysqli_fetch_assoc($result)) { 

					 ?>
					<tr class="text-center">
						<td scope="row"><?php echo ++$i; ?></td>
						<td><?php echo $user['username']; ?></td>
						<td><?php echo $user['email']; ?></td>
						<td><?php echo $user['gender']; ?></td>
						<td><?php echo $user['mobile']; ?></td>
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
				<?php }} ?>
				</table>
			</div>
		</div>
	</div>


<script src="JS/app.js"></script>
</body>

</html>