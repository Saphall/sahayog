<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahayog - Helping people find their lost ones!</title>
    <link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/pray.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/fb9d3931c2.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- NavBar -->
    <?php require 'includes/navbar.php'; ?>
    <!--content-->

    <div class="text-center mt-10 p-5">
        <div>
            <img class="mx-auto w-40 h-40 object-cover rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8cG9ydHJhaXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
            <!-- Lorem Ipsum -->
            <p class="font-semibold text-2xl my-2">Ram Sharma</p>
        </div>
        <div class="mt-10">
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200">
                <div class="w-48 font-semibold text-right">Age:</div>
                <div>32</div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-100">
                <div class="w-48 font-semibold text-right">Gender:</div>
                <div>Male</div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200">
                <div class="w-48 font-semibold text-right">Address:</div>
                <div>Gatthaghar, Bhaktapur</div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200 mt-8">
                <div class="w-48 font-semibold text-right">Last seen Location:</div>
                <div>Airport, Kathmandu</div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-100">
                <div class="w-48 font-semibold text-right">Last seen Date:</div>
                <div>21st July 2020</div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200 mt-8">
                <div class="w-48 font-semibold text-right">Lost Reported By:</div>
                <div>Hari Sharma</div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-100">
                <div class="w-48 font-semibold text-right">Relation:</div>
                <div>Brother</div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200">
                <div class="w-48 font-semibold text-right">Contact Number:</div>
                <div>9841000001</div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="mt-10 w-full p-5 rounded bg-gray-100">Here goes the description of the lost user... can be anything included by the user reporting the lost person.</div>
        </div>
    </div>


    <script src="JS/app.js"></script>
</body>

</html>