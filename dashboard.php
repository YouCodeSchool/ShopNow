<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("location: /ShopNow/login.php");
}

//connect to the db
require('db.php');


if (isset($_POST['create'])) {

    $productName = $_POST['productName'];
    $imgSrc = $_POST['imgSrc'];
    $price = $_POST['price'];
    $cat_id = $_POST['cat_id'];


    $sql_query = "INSERT INTO product (productName, imgSrc, price, cat_id) VALUES ( '$productName' , '$imgSrc' , '$price' , '$cat_id' )";
    $res = mysqli_query($conn, $sql_query);
}

//prepare query string
$sql_query  = "SELECT * FROM product_cat";
$result = mysqli_query($conn, $sql_query);

//transfoorm mysqli_results to array associative
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

//like printf
// var_dump($rows);

$sql_query  = "SELECT * FROM category";
$res = mysqli_query($conn, $sql_query);

$cats =  mysqli_fetch_all($res, MYSQLI_ASSOC);








$BAYC = 'BAYC';
$Dod = 'Doodle';
$WOW = 'World Of Women';
?>

<html lang="en">
<a href="/ShopNow2/Dashboard.php"></a>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ShopNow/public/css/index.css">
    <link rel="stylesheet" href="/ShopNow/public/css/dashboard.css">
    <link rel="stylesheet" href="/ShopNow/public/css/header.css">
    <link rel="stylesheet" href="/ShopNow/public/css/sidebar.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="flex">
    <!-- side bar -->
    <div style="overflow: hidden; position:fixed; left:0; right:0; width: 6.5%; height:100%; background-color: #1F2344; " class="sidebar">
    </div>
    <!-- end side bar -->
    <!-- body content -->
    <div style=" display:none; width: 100vw; height:100vh; background-color: #000000d4; z-index:999; position:absolute; top:0;left:0;" class="flex justify-center items-center popup">
        <form method="POST" style=" background-color: #1F2344;" class=" w-l-wrapper p-3 gap-3 flex rounded flex-col bg-wrapper shadow-wrapper">
            <div style="justify-content: flex-end;" class="w-full flex">
                <h3 onclick="closePopup()" class="cursor-pointer text-white">Cancel</h3>
            </div>
            <h1 class="p-1 text-white flex justify-center items-center ">Add NFT</h1>
            <label for="name" class="text-white pl-3">NFT Name</label>
            <input type="text" style="min-width: 320px;" name="productName" id="name" class="p-1  rounded-sm form-email outline-none" placeholder="Enter NFT Name" required>

            <label for="src" class="text-white pl-3">NFT image</label>
            <input type="text" style="min-width: 320px;" name="imgSrc" id="src" class="p-1  rounded-sm form-email outline-none" placeholder="Enter NFT source URL" required>

            <label for="price" class="text-white pl-3">NFT price</label>
            <input type="number" style="min-width: 320px;" name="price" id="price" class="p-1  rounded-sm form-email outline-none" placeholder="Enter NFT price" required>

            <label for="price" class="text-white pl-3">NFT category</label>
            <select name="cat_id" class="p-1 rounded-sm form-email outline-none">
                <option>select category</option>
                <?php foreach ($cats as $c) { ?>
                    <option value="<?php echo $c['id'] ?>"><?php echo $c['catName'] ?></option>
                <?php } ?>
            </select>

            <div class="flex justify-center w-full">
                <button name="create" style="min-width:300px;" class="p-3 w-btn font-xl cursor-pointer outline-none rounded flex justify-center items-center bg-primary"><span>Add</span></button>
            </div>
        </form>
    </div>

    <div class="body w-full overflow-y-scroll">
        <div class="header w-full">
            <?php include('header.php') ?>
        </div>
        <div style="justify-content: flex-end; margin-top:5rem; " class="flex w-full p-3">
            <button onclick="showPopup()" style="background-color: deeppink;" class="p-1 cursor-pointer text-white rounded-sm">Add new NFT</button>
        </div>
        <div style="padding:1rem; " class="dashboard-wrapper rounded-sm w-full flex bg-violet ">
            <!-- left side of body content -->
            <div class="left-side">
                <div class="flex justify-center">
                    <div style="width: 1025px; height: 323px; border-radius: 15px; background-image: url('./public/assets/images/Etherium.webp'); background-position: center; background-size: cover;" class="">
                    </div>
                </div>
                <div style="width:100%; height:75%; background-color:#12173D; margin-top:3rem; " class="pie rounded">
                    <canvas id="myChart" style="width:20%; height:20%;"></canvas>
                </div>
            </div>
            <!-- end left side of body content -->
            <div class="right-side">
                <?php foreach ($rows as $r) { ?>
                    <!-- card 1 wrapper -->
                    <div style="width:100%; margin-bottom: 30px ; border-radius: 15px; background-color:#12173D; " class="cards-wrapper flex">
                        <div class="img-h3">
                            <div class="h3">
                                <h3 style="color: #FBBE54; margin-top:1rem; margin-left:1rem; font-family:poppins; font-size: 32px;">TOP SALES</h3>
                            </div>
                            <div class="img">
                                <div style="width: 190px; height: 170px;  margin-left:1rem; border-radius: 15px; background-image: url('<?php echo $r['imgSrc'] ?>'); background-position: center; background-size: cover; background-repeat:no-repeat;" class="">
                                </div>
                            </div>
                        </div>
                        <div style="margin-left: 2rem;" class="text-content flex justify-center items-center">
                            <div style=" font-size: 20px;">
                                <h3 style="color:white; font-family:poppins;"><?php echo $r['productName']; ?></h3>
                                <div class="">
                                    <p style="color: #C2C2C2; margin-top:1rem; font-family:poppins;">Sale ends January 16, 2022 <br />at 9:25am</p>
                                </div>

                                <div style="gap: 1rem; margin-top:1rem;" class="flex items-center ">

                                    <i style="color:  #ff37d7;" class="fab fa-ethereum"></i>
                                    <p style=" font-size:1rem; color:white; font-family:poppins;"><?php echo $r['price']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card 1 wrapper -->
                <?php } ?>

            </div>
        </div>
        <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [
                        <?php
                                foreach ($rows as $r) {
                                    echo '"';
                                    echo  $r['productName'];
                                    echo '"';
                                    echo ",";
                                }
                                ?>
                    ],
                    datasets: [{
                        label: '# of Votes',
                        data: [<?php
                                foreach ($rows as $r) {
                                    echo $r['price'];
                                    echo ",";
                                }
                                ?>],
                        backgroundColor: [
                            'violet','blue','purple','grey','yellow','blue','black'
                        ],
                        borderColor: [
                            'violet','blue','purple','grey','yellow','blue','black'
                        ],
                        borderWidth: 3
                    }]
                },
            });
            const showPopup = () => {
                document.querySelector('.popup').style.display = 'flex'
            }

            const closePopup = () => {
                document.querySelector('.popup').style.display = 'none'
            }
        </script>
        <script src="./public/js/helpers/helpers.js"></script>
        <script src="./public/js/sidebar.js"></script>
</body>

</html>