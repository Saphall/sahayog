<?php session_start(); ?>
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
    <!-- NavBar -->
    <?php require 'includes/navbar.php'; ?>
    <!--content-->

    <div class="text-center mt-10 p-5">

         <?php 

            require 'Auth/connection.php';
            $reporter = $_SESSION['id'];
            $query = "SELECT * from reports as r ";
            if ($_SESSION['type'] == 'user') {
                $query .= "where r.reported_by=$reporter";
            }

            $result=mysqli_query($conn,$query);

            $row_count = mysqli_num_rows($result);
            $detail=mysqli_fetch_assoc($result)
            ?>
        <div>
            <img class="mx-auto w-40 h-40 object-cover rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />

            <!-- Lorem Ipsum -->
            <p class="font-semibold text-2xl my-2"><?php echo $detail['name'] ?></p>
        </div>
        <div class="mt-10">
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200">
                <div class="w-48 font-semibold text-right">Age:</div>
                <div><?php echo $detail['age']; ?></div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-100">
                <div class="w-48 font-semibold text-right">Gender:</div>
                <div><?php echo $detail['gender']; ?></div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200">
                <div class="w-48 font-semibold text-right">Address:</div>
                <div><?php echo $detail['address']; ?></div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200 mt-8">
                <div class="w-48 font-semibold text-right">Last seen Location:</div>
                <div><?php echo $detail['lost_from']; ?></div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-100">
                <div class="w-48 font-semibold text-right">Last seen Date:</div>
                <div><?php echo $detail['lost_at']; ?></div>
                <!--  <div><?php echo date('Y m d',strtotime($detail['lost_at'])); ?></div> -->
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200 mt-8">
                <div class="w-48 font-semibold text-right">Lost Reported By:</div>
                <div><?php echo $_SESSION['username'] ?></div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-100">
                <div class="w-48 font-semibold text-right">Relation:</div>
                <div><?php echo $detail['relation']; ?></div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="flex flex-wrap gap-x-3 bg-gray-200">
                <div class="w-48 font-semibold text-right">Contact Number:</div>
                <div>100 / </div>
            </div>
            <!-- Lorem Ipsum -->
            <div class="mt-10 w-full p-5 rounded bg-gray-100"><?php echo $detail['description']; ?></div>
        </div>
    </div>


    <script src="JS/app.js"></script>
</body>

</html>