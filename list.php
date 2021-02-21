<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahayog - Helping people find their lost ones!</title>
    <link rel="stylesheet" href="CSS/style.css">
     <link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/pray.png" type="image/x-icon">
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
                    <form action="" method="GET"></form>
                        <input id="search" name="search" type="text" required class="appearance-none rounded-none relative block w-full md:w-64 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Search By Name" />

                        <input type="submit" class="" name="go" value="Go" />
                        <!-- <a href="list.php?search='kali">go</a> -->
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-10 flex flex-wrap gap-8 justify-center">

            <?php 

            require 'Auth/connection.php';
            // $reporter = $_SESSION['id'];

            if ( (isset($_GET['go'])) && (!empty($_GET['search'])) ) {
                $search = $_GET['search'];
                $query = "SELECT * from reports as r where r.name like '%$search%'";
            } else {
                $query = "SELECT * from reports as r ";
            }
            // echo $query;exit;
            // if ($_SESSION['type'] == 'user') {
            //     $query .= "where r.reported_by=$reporter";
            // }

            $result=mysqli_query($conn,$query);

            $row_count = mysqli_num_rows($result);
              // echo $row_count;

            if ($result && $row_count>0) {
                
            // $i=0; 
            while ($report=mysqli_fetch_assoc($result)) { 

             ?>
            <div class="w-32">
                <img class="mx-auto w-24 h-24 shadow-md object-cover rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                <p class="font-semibold my-2"><?php echo $report['name']; ?></p>
                <a id='details' class="bg-green-300 shadow font-medium px-3 py-1 rounded-full" href="detail.php?id=<?php echo $report['id']; ?>">Details</a>
            </div>

            <?php } } ?>
        </div>
    </div>
    </div>

    <script src="JS/app.js"></script>
</body>

</html>