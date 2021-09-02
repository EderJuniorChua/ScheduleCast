<!DOCTYPE html>
<html class="h-full">
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>            
        .success {
            background: #D4EDDA;
            color: #40754C;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
        </style>
    </head>
    <body class="h-full">
        <!-- Parent flex container -->
        <div class="flex flex-row flex-wrap h-full">
            <!-- Login -->
            <!-- <div class="flex flex-grow w-5/12 justify-center items-center bg-gradient-to-bl from-blue-500 to-pink-500"> -->
            <div class="flex flex-grow w-5/12 justify-center items-center bg-white">
                <div class="flex flex-col gap-y-5 white w-3/5">
                    <div class="flex-1">
                        <img src="assets/img/CIIT-Logo.png " class="w-1/2 mb-4">
                        <h1 class="text-4xl font-bold">Sign up</h1>
                        <h2>Already have an account? <a href="login.php" class="font-bold text-blue-700">Login</a></h2>
                    </div>
                    <div class="flex-1 bg-blue-500 rounded-lg my-1">
                        <a href="#" class="flex flex-row gap-x-4 m-1 justify-center items-center">
                            <img src="assets/img/Google-Logo.png" class="w-10 bg-white rounded-full"><p class="text-lg text-white">Sign up with Google</p>
                        </a>
                    </div>
                    <div class="flex flex-1 flex-row justify-between gap-x-2 items-center">
                        <span class="inline-block align-middle h-px w-32 relative bg-gray-400"></span>
                        <p class="text-md font-bold text-gray-700">Or continue with</p>
                        <span class="inline-block align-middle h-px w-32 relative bg-gray-400">
                    </div>
                    <div class="flex-1">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="w-full bg-red-100 text-red-700 p-2.5 rounded-md my-5"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="w-full bg-green-100 text-green-700 p-2.5 rounded-md my-5"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                    </div>
                    <div>
                        <form class="flex flex-1 flex-col gap-y-3" action="signup-check.php" method="post">

                            <label for="email" class="mt-2 -mb-3"><b>Email address</b></label>
                            <?php if (isset($_GET['email'])) { ?>
                                    <input  type="email" name="email" class="rounded-md border-2 border-gray-400 p-1.5" 
                                            value="<?php echo $_GET['email']; ?>" required>
                            <?php }else{ ?>
                                    <input type="email" name="email" class="rounded-md border-2 border-gray-400 p-1.5" required>
                            <?php }?>
                                
                            <label for="password" class="mt-2 -mb-3"><b>Password</b></label>
                            <input type="password" name="password" class="rounded-md border-2 border-gray-400 p-1.5" required>

                            <label for="repeat_password" class="mt-2 -mb-3"><b>Repeat Password</b></label>
                            <input type="password" name="repeat_password" class="rounded-md border-2 border-gray-400 p-1.5" required>
                            
                            <div></div>

                            <button type="submit" class="flex-1 bg-blue-500 rounded-lg p-2">
                            <p class="text-lg text-white">Login</p>
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