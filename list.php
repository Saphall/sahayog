<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahayog - Helping people find their lost ones!</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/fb9d3931c2.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        img:hover {
            transform: scale(1.075);
            transition: 0.2s ease-in;
            /* cursor: pointer; */
        }

        #details:hover {
            background: #e66557;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>
    <!-- NavBar -->
    <?php require 'includes/navbar.php'; ?>


    <!--content-->
    <!-- Name and images below are placeholder .. they are supposed to replaced with actual content -->
    <div class="text-center mt-10 px-5">
        <div class="my-5">
            <p class="text-2xl font-semibold mb-3">Lost people!</p>
            <p class="font-small">Unfortunately these people have been lost/reported to be not found.</p>
            <p class="font-small">If you know about anyone below please make sure to let their relatives know.</p>
            <div align="center" class="my-10">
                <div class="w-full md:w-64">
                    <input id="search" name="search" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Search By Name" />
                </div>
            </div>
        </div>
        <div class="mt-10 flex flex-wrap gap-8 justify-center">
            <div class="w-32">
                <img class="mx-auto w-24 h-24 shadow-md object-cover rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8cG9ydHJhaXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                <p class="font-semibold my-2">Ram Sharma</p>
                <a id='details' class="bg-green-300 shadow font-medium px-3 py-1 rounded-full" href="#">Details</a>
            </div>
            <div class="w-32">
                <img class="mx-auto w-24 h-24 shadow-md object-cover rounded-full" src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjB8fHBvcnRyYWl0fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                <p class="font-semibold my-2">Hari Singh</p>
                <a id='details' class="bg-green-300 shadow font-medium px-3 py-1 rounded-full" href="#">Details</a>
            </div>
            <div class="w-32">
                <img class="mx-auto w-24 h-24 shadow-md object-cover rounded-full" src="https://images.unsplash.com/photo-1552374196-c4e7ffc6e126?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8cG9ydHJhaXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                <p class="font-semibold my-2">Pradeep Lama</p>
                <a id='details' class="bg-green-300 shadow font-medium px-3 py-1 rounded-full" href="#">Details</a>
            </div>
            <div class="w-32">
                <img class="mx-auto w-24 h-24 shadow-md object-cover rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                <p class="font-semibold my-2">Sita Lamsal</p>
                <a id='details' class="bg-green-300 shadow font-medium px-3 py-1 rounded-full" href="#">Details</a>
            </div>
            <div class="w-32">
                <img class="mx-auto w-24 h-24 shadow-md object-cover rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjV8fHBvcnRyYWl0fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                <p class="font-semibold my-2">Shyam Shrestha</p>
                <a id='details' class="bg-green-300 shadow font-medium px-3 py-1 rounded-full" href="#">Details</a>
            </div>
            <div class="w-32">
                <img class="mx-auto w-24 h-24 shadow-md object-cover rounded-full" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzN8fHBvcnRyYWl0fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                <p class="font-semibold my-2">Rita Kumari</p>
                <a id='details' class="bg-green-300 shadow font-medium px-3 py-1 rounded-full" href="#">Details</a>
            </div>
            <div class="w-32">
                <img class="mx-auto w-24 h-24 shadow-md object-cover rounded-full" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDF8fHBvcnRyYWl0fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                <p class="font-semibold my-2">Nischal Thapa</p>
                <a id='details' class="bg-green-300 shadow font-medium px-3 py-1 rounded-full" href="#">Details</a>
            </div>
        </div>
    </div>
    </div>

    <script src="JS/app.js"></script>
</body>

</html>