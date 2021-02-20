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
    <!-- NavBar -->
    <?php require 'incudes/navbar.php'; ?>

    <!--content-->
    <div class="mt-10 px-5">
        <form action="register_action.php" method="POST">
            <div>
                <label for="image">Upload Image</label>
                <input id="image" name="image" type="file" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name" />
            </div>
            <div class="mt-5">
                <div class="flex flex-col gap-y-2">
                    <div class="flex flex-wrap gap-3">
                        <!-- Name -->
                        <div align="start" class="w-full md:w-64">
                            <label for="fullname">Full Name</label>
                            <input id="fullname" name="fullname" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name" />
                        </div>
                        <!-- Age -->
                        <div align="start" class="w-full md:w-64">
                            <label for="age">Age</label>
                            <input id="age" name="age" type="number" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Age" />
                        </div>
                    </div>
                    <!-- Gender -->
                    <div align="start" class="my-3">
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
                    <div align="start" class="w-full md:w-64">
                        <label for="address">Address</label>
                        <input id="address" name="address" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Address" />
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <!-- Lost on -->
                        <div align="start" class="w-full md:w-64">
                            <label for="lost_on">Lost on</label>
                            <input id="lost_on" name="lost_on" type="date" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" />
                        </div>
                        <!-- Lost from -->
                        <div align="start" class="w-full md:w-64">
                            <label for="lost_from">Lost from</label>
                            <input id="lost_from" name="lost_from" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last known location" />
                        </div>
                    </div>
                    <!-- Relation -->
                    <div align="start" class="w-full md:w-64">
                        <label for="relation">Relation</label>
                        <input id="relation" name="relation" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Relation with the lost person" />
                    </div>
                    <div class="w-full">
                        <label for="description">Other Details</label>
                        <textarea id="description" rows="5" name="description" class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" /></textarea>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" name="btn_register" class="my-5 rounded-md py-2 px-5 bg-blue-200 hover:bg-blue-400" />
            </div>
        </form>
    </div>

    <script src="JS/app.js"></script>
</body>

</html>