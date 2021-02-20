<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report lost person - Sahayog</title>
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
            <div class="w-full bg-gray-300 p-2 font-semibold">Report Lost User</div>
            <?php if($_SESSION['error_msg']): ?>
                <div class="bg-red-200 rounded-lg p-3 border-l-4 border-red-400">
                    <?php echo $_SESSION['error_msg']; ?>
                </div>
            <?php endif: ?>
            <div class="p-5">
                <form action="register_action.php" method="POST">
                    <div>
                        <label for="image">Upload Image</label>
                        <input id="image" name="image" type="file" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name" />
                    </div>
                    <div class="mt-5">
                        <div class="flex flex-col gap-y-2">
                            <!-- Name -->
                            <div align="start" class="w-full">
                                <label for="fullname">Full Name</label>
                                <input id="fullname" name="fullname" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name" />
                            </div>
                            <!-- Age -->
                            <div align="start" class="w-full">
                                <label for="age">Age</label>
                                <input id="age" name="age" type="number" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Age" />
                            </div>
                            <!-- Gender -->
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
                            <!-- Address -->
                            <div align="start" class="w-full">
                                <label for="address">Address</label>
                                <input id="address" name="address" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Address" />
                            </div>
                            <!-- Lost on -->
                            <div align="start" class="w-full">
                                <label for="lost_on">Lost on</label>
                                <input id="lost_on" name="lost_on" type="date" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" />
                            </div>
                            <!-- Lost from -->
                            <div align="start" class="w-full">
                                <label for="lost_from">Lost from</label>
                                <input id="lost_from" name="lost_from" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last known location" />
                            </div>
                            <!-- Relation -->
                            <div align="start" class="w-full">
                                <label for="relation">Relation</label>
                                <input id="relation" name="relation" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Relation with the lost person" />
                            </div>
                            <div class="w-full">
                                <label for="description">Other Details</label>
                                <textarea id="description" rows="5" name="description" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" /></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="btn_register" class="my-5 rounded-md py-2 px-5 bg-blue-200 hover:bg-blue-400" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="JS/app.js"></script>
</body>

</html>