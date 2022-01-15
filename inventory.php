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
        <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
</head>
<body class="flex flex-row">  
    <!-- <header> -->
    <!-- Left bar -->

        <div class="left-bar-container bg-color center">

            <div><a href="#"><img class="logo" src="public\assets\images\Logo.png"></a></div>
            <!-- Switch pages : stats /inventory -->
            <div class="page-switcher">
                <div id="invent-page">
                    <h2><a href="#">Inventory</a></h2>
                </div>
                <div id="stats-page">
                    <h2><a href="#">Stats</a></h2>
                    <div id="border-left"></div>
                </div>
            </div>
            <!-- CRUD operations -->
            <div class="flex flex-col center">
                <div class="flex flex-row" >
                    <div class="space-between"><img src="public/assets/images/add.svg"></div>
                    <div class="space-between"><h1><a href="#">ADD</a></h1></div>
                 </div>

                 <div class="flex flex-row" >
                    <div class="space-between"><img src="public/assets/images/update.svg"></div>
                    <div class="space-between"><h1><a href="#">UPDATE</a></h1></div>
                 </div>

                 <div class="flex flex-row" >
                    <div class="space-between"><img src="public/assets/images/delete.svg"></div>
                    <div class="space-between"><h1><a href="#">DELETE</a></h1></div>
                 </div>
            </div>

        </div>

        <div class="main-page center">
            <div class="flex flex-row center" style="width : inherit;">
                <div class="search-container margin">
                    <form for="search">
                        <div class="input-icons">
                            <i class="fas fa-search icon"></i>
                            <input type="text" class="bg-color input-field" id="search" name="searchByName" placeholder="Search"> 
                        </div>
                    </form>
                </div>
                <div class="cat-container">
                    <form for="cat">
                        <div class="input-icons">
                            <i class="fas fa-search icon"></i>
                            <input type="text" class="bg-color input-field" id="cat" name="searchByCat" placeholder="All Categories"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>

    
</body>
</html>