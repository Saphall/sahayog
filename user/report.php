<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahayog - Helping people find their lost ones!</title>
    <link rel="stylesheet" href="../CSS/style.css">
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
				<table class="w-full" border="2">
					<tr>
						<th class="px-3">Name</th>
						<th class="px-3">Gender</th>
						<th class="px-3">Age</th>
						<th class="px-3">Actions</th>
					</tr>
					<?php 

					require '../Auth/connection.php';
					$reporter = $_SESSION['id'];
					$query = "SELECT * from reports as r ";
					if ($_SESSION['type'] == 'user') {
						$query .= "where r.reported_by=$reporter";
					}

					$result=mysqli_query($conn,$query);

	                $row_count = mysqli_num_rows($result);
	                  // echo $row_count;

	                if ($result && $row_count>0) {
	                    
	                // $i=0; 
	                while ($report=mysqli_fetch_assoc($result)) { 

					 ?>
					<tr class="text-center">
						<td><?php echo $report['name']; ?></td>
						<td><?php echo $report['gender']; ?></td>
						<td><?php echo $report['age']; ?></td>
						
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
				<?php } } ?>
				</table>
			</div>
		</div>
	</div>


<script src="../JS/app.js"></script>
</body>

</html>