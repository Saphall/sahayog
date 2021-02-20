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
</head>

<body>
    <!-- NavBar -->
    <?php require 'includes/navbar.php'; ?>
<!--content-->
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>SAHAYOG</h1>
                <p>Helping people find their lost ones!</p>
                <br>
                <button class='button' id='signup'>Sign up</button>
            </div>
            <div class="main__img--container">
                <img src="Images/Logo1.png" alt="" id="main__img">
            </div>
        </div>
    </div>

    <!-- <div class="text-center mt-10 px-5">
        <p class="text-6xl">Sahayog</p>
        <p class="mt-5 text-xl text-gray-700 italic">Helping people find their lost ones!</p>
    </div> -->

    <!--latestReports-->
    <!-- <div class="report">
        <p> This contains images of latest lost.</p>
    </div> -->


    <script src="JS/app.js"></script>
    <script>
        document.getElementById("signup").onclick = function() {
            window.location.href = ("register");
        }
    </script>
</body>

</html>