<?php
require('db.php');
if (isset($_POST['create'])) {
    $fName = $_POST['fullname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql_query = "INSERT INTO user (fullName, tel, email, pass) VALUES ('$fName', '$tel' , '$email' , '$pass' )";
    $result = mysqli_query($conn, $sql_query);
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['user'] = $email;
    header("location: /ShopNow/dashboard.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fontawesome.com/">
    <link rel="stylesheet" href="/ShopNow/public/css/index.css">
    <link rel="stylesheet" href="/ShopNow/public/css/login.css">
    <link rel="stylesheet" href="/ShopNow/public/css/signup.css">
    <script src="./public/js/helpers/helpers.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>
    <div class=" Signup-wrapper flex justify-center items-center">
        <form method="POST" style="height: 115vh;" class="login-form w-l-wrapper p-3 gap-3 flex rounded flex-col bg-wrapper shadow-wrapper">
            <h1 class="p-3 text-white flex justify-center items-center ">Sign Up to <br />NFT Now</h1>
            <label for="name" class="text-white pl-3">Full Name</label>
            <input type="name" name="fullname" id="name" class="p-3 text-white rounded-sm form-email outline-none" placeholder="Enter your Name" required>
            <label for="tel" class="text-white pl-3">Phone Number</label>
            <input id="tel" name="tel" class="p-3 text-white rounded-sm form-email outline-none" type="tel" placeholder="0666666666" required>
            <label for="email" class="text-white pl-3">Email Adress</label>
            <input id="email" name="email" class="p-3 text-white rounded-sm form-email outline-none" type="email" placeholder="login@gmail.com" required>
            <label for="pass" class="text-white pl-3">Password</label>
            <input id="pass" name="pass" class="p-3 text-white rounded-sm form-email outline-none" type="password" placeholder="+6 characters" required>
            <div class="flex justify-center w-full">
                <button name="create" style="min-width:300px;" class="p-3 w-btn font-xl cursor-pointer outline-none rounded flex justify-center items-center bg-primary"><span>Signup</span></button>
            </div>
            <div class="flex justify-center w-full">
                <span class="text-white">Already have an account? <a class="text-primary" href="/ShopNow/login.php">Sign In</a></span>
            </div>
        </form>
    </div>
    </div>

    <script src="./public/js/helpers/helpers.js"></script>
</body>

</html>