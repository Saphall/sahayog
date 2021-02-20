<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Register - Sahayog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<div class="text-center mx-auto p-5">
		<h1 class="text-3xl font-semibold mb-10">Registration</h1>
		<form action="register_action.php" method="POST">
			<div class="flex flex-col gap-y-2">
				<div class="flex flex-wrap gap-3">
					<div align="start" class="w-full md:w-64">
						<label for="firstname">First Name</label>
						<input id="firstname" name="firstname" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="First Name" />
					</div>
					<div align="start" class="w-full md:w-64">
						<label for="middlename">Middle Name</label>
						<input id="middlename" name="middlename" type="text" class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Middle Name" />
					</div>
					<div align="start" class="w-full md:w-64">
						<label for="lastname">Last Name</label>
						<input id="lastname" name="lastname" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last Name" />
					</div>
				</div>
				<div align="start">
					<label for="dob">Date of Birth</label>
					<input id="dob" name="dob" type="date" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" />
				</div>
				<div class="my-3" align="start">
					<label for="">Gender</label>
					<div class="flex flex-wrap gap-x-5 items-center">
						<div class="flex items-center">
							<input id="male" name="gender" type="radio" value="male" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
							<label for="male" class="ml-1 block text-sm font-medium text-gray-700"> Male </label>
						</div>
						<div class="flex items-center">
							<input id="female" name="gender" type="radio" value="female" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
							<label for="female" class="ml-1 block text-sm font-medium text-gray-700"> Female </label>
						</div>
						<div class="flex items-center">
							<input id="other" name="gender" type="radio" value="other" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
							<label for="other" class="ml-1 block text-sm font-medium text-gray-700"> Other </label>
						</div>
					</div>
				</div>
				<div class="flex flex-wrap gap-3">
					<div align="start" class="w-full md:w-64">
						<label for="address1">Permanent Address</label>
						<input id="address1" name="address1" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Permanent Address" />
					</div>
					<div align="start" class="w-full md:w-64">
						<label for="address2">Temporary Address</label>
						<input id="address2" name="address2" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Temporary Address" />
					</div>
				</div>
				<div align="start">
					<label for="mobile">Mobile</label>
					<input id="mobile" name="mobile" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Mobile Number" />
				</div>
				<div align="start">
					<label for="email">Email</label>
					<input id="email" name="email" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email" />
				</div>
				<div align="start">
					<label for="username">Username</label>
					<input id="username" name="username" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Username" />
				</div>
				<div class="flex flex-wrap gap-3">
					<div align="start" class="w-full md:w-64">
						<label for="password">Password</label>
						<input id="password" name="password" type="password" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="password" />
					</div>
					<div align="start" class="w-full md:w-64">
						<label for="password2">Confirm Password</label>
						<input id="password2" name="password2" type="password" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Re-enter password" />
					</div>
				</div>
				<input type="submit" name="btn_register" class="self-center my-5 rounded-md py-2 px-5 bg-blue-200 hover:bg-blue-400" />
			</div>
		</form>
	</div>
</body>
</html>