<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="flex flex-wrap">
		<div class="w-full sm:w-48 pt-3 bg-yellow-50 sm:min-h-screen border border-r border-gray-300">
			<div class="text-center text-4xl mb-3 font-semibold">
				Sahayog
			</div>
			<!-- Lorem Ipsum -->
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
			<div class="w-full bg-gray-300 p-2 font-semibold">User Profile</div>
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