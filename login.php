<?php
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fontawesome.com/">
    <link rel="stylesheet" href="/ShopNow/public/css/index.css">
    <link rel="stylesheet" href="/ShopNow/public/css/login.css">
    <script src="./public/js/helpers/helpers.js" defer ></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class=" login-wrapper w-full h-full flex justify-center items-center">
        <form action="/ShopNow/dashboard.php" class="login-form w-l-wrapper h-l-wrapper p-3 gap-3 flex rounded flex-col bg-wrapper shadow-wrapper">
            <h1 class="p-3 text-white flex justify-center items-center ">Sign In to <br/>NFT Now</h1>
            <label for="email" class="text-white pl-3">Email Adress</label>
            <input id="email" name="email" class="p-3 text-white rounded-sm form-email outline-none" type="email" placeholder="login@gmail.com" required>
            <label for="password" class="text-white pl-3">Password</label>
            <input id="password" name="password" class="p-3 text-white rounded-sm form-email outline-none" type="password" placeholder="****************" required>
            <div class="flex justify-center w-full">
                <button style="min-width:300px;" class="p-3 w-btn font-xl cursor-pointer outline-none rounded flex justify-center items-center bg-primary"><span>Login</span></button>
            </div>
            <div class="flex justify-center w-full">
                <span class="text-white">You don't have an account? <a class="text-primary" href="#">Create account</a></span>
            </div>
        </form>
    </div>
</body>

</html>