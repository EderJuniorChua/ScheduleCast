<?php
session_start();
?>
<!DOCTYPE html>
<html class="h-full">

<head>
    <title>CIITzen Authentify</title>
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <style>

    </style>
</head>

<body class="h-full">
    <!-- Parent flex container -->
    <div class="flex flex-row flex-wrap h-full">
        <!-- Login -->
        <div class="flex flex-grow w-5/12 justify-center items-center bg-white">
            <div class="flex flex-col gap-y-5 white w-3/5">
                <div class="flex-1">
                    <img src="assets/img/CIIT-Logo.png " class="w-1/2 mb-4">
                    <h1 class="text-4xl font-bold">CIIT Bubble Authentify</h1>
                </div>
                <div class="flex-1 bg-blue-500 rounded-lg my-1">
                    <a href="#" class="flex flex-row gap-x-4 m-1 justify-center items-center">
                        <!-- <img src="assets/img/Google-Logo.png" class="w-10 bg-white rounded-full"> -->
                        <img src="assets/img/CIIT-Logo-Initials.png" class="h-10">
                        <p class="text-lg text-white">Email Login</p>
                    </a>
                </div>
                <div class="flex-1">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="w-full bg-red-100 text-red-700 p-2.5 rounded-md my-5"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                </div>
                <div>
                    <form class="flex flex-1 flex-col gap-y-7" action="login.php" method="post">

                        <label for="number" class="mt-2 -mb-5"><b>Student Number</b></label>
                        <input type="number" name="email" class="rounded-md border-2 border-gray-400 p-1.5" required>

                        <button type="submit" class="flex-1 bg-blue-500 rounded-lg p-2">
                            <p class="text-lg text-white">Verify</p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Background -->
        <div class="flex flex-grow w-7/12 bg-green-200">
            <img alt="CIIT Header" class="bg-center bg-no-repeat object-cover h-full w-auto" src="assets/img/interweave.jpg">
        </div>
    </div>

</body>

</html>