<?php
ini_set("error_reporting", E_ALL); 
ini_set("html_errors", true); 
ini_set("display_errors", "stdout"); 
?>
<!-- <!DOCTYPE html> -->


<html lang="en">

<head>
        <meta charset="UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="NFT, digital art, property">
        <meta name="description" content="NFT selling platform">
        <!-- <meta name="author" content=""> -->
        <meta name="application-name" content="ShopNow : Our NFT Selling Platform">
        <title>ShopNow</title>
        <link rel="stylesheet" href="public/css/inventory.css">
</head>
<body>  
            <!-- <header> -->
            <!-- Left bar -->

            <div class="left-bar-container bg-color center">

        <div><img class="logo" src="public\assets\images\Logo.png"></div>
        <!-- Switch pages : stats /inventory -->
        <div class="page-switcher">
            <div id="invent-page">
                <h2>Inventory</h2>
            </div>
            <div id="stats-page">
                <h2>Stats</h2>
                <div id="border-left"></div>
            </div>
        </div>
        <!-- CRUD operations -->
        <div class="flex flex-col center">
            <div class="flex flex-row" >
                <div class="space-between"><img src="public/assets/images/add.svg"></div>
                <div class="space-between"><h1>ADD</h1></div>
            </div>

            <div class="flex flex-row" >
                <div class="space-between"><img src="public/assets/images/update.svg"></div>
                <div class="space-between"><h1>UPDATE</h1></div>
            </div>

            <div class="flex flex-row" >
                <div class="space-between"><img src="public/assets/images/delete.svg"></div>
                <div class="space-between"><h1>DELETE</h1></div>
            </div>
        </div>

        </div>

        <div class="main-page">
            <h1 style ="color:Black;">text </h1>
        </div>
</body>
</html>