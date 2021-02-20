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
		<div class="w-full sm:w-48 pt-3 bg-yellow-50 sm:min-h-screen border border-r border-gray-300">
			<div class="sahayog_logo text-center text-4xl mb-3 font-semibold">
				Sahayog
			</div>
			<div class="text-center">
				<img class="mx-auto w-32 h-32 object-cover shadow rounded-full mb-2" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8cG9ydHJhaXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
				<span class="font-semibold text-xl">Hari Sharma</span>
			</div>
			<div class="flex flex-col mt-10">
				<a href="#" class="bg-gray-50 hover:bg-gray-200 border-t border-b p-2"> Home </a>
				<a href="user" class="bg-gray-50 hover:bg-gray-200 border-t border-b p-2"> Profile </a>
				<a href="user" class="bg-gray-50 hover:bg-gray-200 border-b p-2"> Users </a>
				<a href="report" class="bg-gray-50 hover:bg-gray-200 border-b p-2"> Report </a>
				<a href="logout" class="bg-red-200 hover:bg-red-300 border-b p-2"> Logout </a>
			</div>
		</div>
		<div class="pt-5 sm:pt-0 flex-grow">
			<div class="w-full bg-gray-300 p-2 font-semibold">Registered Users</div>
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