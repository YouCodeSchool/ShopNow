<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: /ShopNow/login.php");
}
$bit = 'Bitcoin';
?>

<?php require('db.php');


$sql = "SELECT * FROM product_cat";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "0 results";
}
?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="NFT, digital art, property">
    <meta name="description" content="NFT selling platform">
    <meta name="application-name" content="ShopNow : Our NFT Selling Platform">
    <title>Inventory</title>
    <link rel="stylesheet" href="/ShopNow/public/css/header-inventory.css">
    <link rel="stylesheet" href="/ShopNow/public/css/index-inventory.css">
    <link rel="stylesheet" href="/ShopNow/public/css/dashboard.css">
    <link rel="stylesheet" href="/ShopNow/public/css/sidebar-inventory.css">
    <link rel="stylesheet" href="public/css/inventory.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

</head>

<body class="flex flex-row center">
    <!-- side bar -->
    <div style="overflow: hidden; position:fixed; left:0; height:100%; background-color: #1F2344; " class="sidebar">
    </div>
    <!-- end side bar -->
    <div class="main-page flex flex-col center">
        <div style="width : 100%; height : 2%" >
            <?php include('header-inventory.php'); ?>
        </div>
        <div class="SEARCH_MOBILE SEARCH flex center ">
            <div class="search-container space-between">
                <form action="" for="search">
                    <div class="input-icons">
                        <i class="fas fa-search icon"></i>
                        <input type="text" class="bg-color input-field" id="search" name="searchByName" placeholder="Search">
                    </div>
                </form>
            </div>
            <div class="cat-container space-between">
                <form action="" for="cat">
                    <div class="input-icons dropdown">
                        <i class="fas fa-chevron-circle-down icon "></i>
                        <div class="dropdown-content">
                            <a href="#">All Categories</a>
                            <a href="#">Pixel Art</a>
                            <a href="#">2D Graphics</a>
                            <a href="#">3D Graphics</a>
                        </div>
                        <input type="text" class="bg-color input-field" id="cat" name="searchByCat" placeholder="All Categories">
                    </div>
                </form>
            </div>
        </div>
        <!-- filter By section -->
        <div class="flex flex-row center" style="margin-top : 0.8rem; color:white;">
            <form class="FILTER flex flex-row center">
                <div class="flex flex-row center">
                    <h3>Price : MIN</h3>
                    <input style="" class="space-between color center" type="number" id="min-price" placeholder="0.0">

                    <h3>MAX</h3>
                    <input class="space-between color center" type="number" id="max-price" placeholder="0.0">
                </div>
                <div class="flex flex-row center">
                    <h3>From </h3>
                    <!-- <form for="start-date"> -->
                    <input class="space-between color center" type="date" id="start-date" placeholder="dd/jj/yyyy">
                    <!-- </form> -->
                    <h3>To</h3>
                    <!-- <form for="end-date"> -->
                    <input class="space-between color center" type="date" id="end-date" placeholder="">
                    <!-- </form> -->
                </div>
                <div>
                    <button class="bg-color" style="background-color:violet; color:white;" type="submit">FILTER</button>
                </div>
            </form>

        </div>

        <!-- ADD PRODUCT -->
        <div style="width:95%; padding:1rem; display:flex; justify-content:flex-end;">
            <button class="ADD_BUTTON" style="background : none; border : none"><a href="#"><img src="public/assets/images/add.svg"></a></button>
        </div>

        <!-- Products tables/pages -->
        <div class="scroll">
            <table style="table-layout: fixed; width : 100%; color:white;">
                <tr>
                    <th><input style="color:white;" type="checkbox" id="" name="" value=""></th>
                    <th>#</th>
                    <th class="Hide_Name">Name</th>
                    <th>Price</th>
                    <th class="Hide_Cat">Category</th>
                    <th class="Hide_Date">Add Date</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($row as $nft) { ?>
                    <tr id="<?php echo $nft['id']; ?>" onclick="ActivateRow('<?php echo $nft['id']; ?>')">
                        <td class="center"><input type="checkbox" id="" name="" value=""></td>
                        <td class="NFT-img"><a  href="#"><img src="<?php echo $nft['imgSrc'] ?>"></a></td>
                        <td class="Hide_Name"><a href="#"><?php echo $nft['productName'] ?></a></td>
                        <td><a href="#"><?php echo $nft['price'] ?></a></td>
                        <td class="Hide_Cat"><a href="#"><?php echo $nft['catName'] ?></a></td>
                        <td class="Hide_Date"><a href="#"><?php echo $nft['createdAt']; ?></a></td>
                        <td>
                            <div class="actions flex center">
                                <form class="form_delete_button" action="crud_DB.php" method="POST">
                                    <input type="text" name="id_product" hidden value="<?php echo $nft['id']; ?>">
                                    <button class="DELETE_BUTTON filter-red" name="delete" style="background : none; border : none"><a href="#"><img  src="public/assets/images/delete.svg"></a></button>
                                </form>
                                <button class="UPDATE_BUTTON filter-green" name="update" style=" background : none; border : none"><a href="#"><img  src="public/assets/images/update.svg"></a></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Send id of product to highlight the row if clicked -->
                <?php } ?>
            </table>
        </div>

        <!-- pagination -->
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>

        <!-- ADD PRODUCT BLOCK -->
        <div class="bg-blurr">
        </div>
        <div class="ADD bg-color flex">
            <div class="flex" style="justify-content:flex-end;"> 
                <i class="CLOSE fas fa-window-close" style="font-size: 3em; float:right; margin-top:1rem; margin-bottom : 2rem; margin-right:1rem;"></i>
            </div>
            <div class="">
                <form action="crud_DB.php" method="POST" class="flex flex-col">
                    <ul class="flex flex-row" style="justify-content: space-evenly; flex-wrap : wrap;">
                        <li>
                            <label for="NFT_Name">NFT Name:</label>
                            <input type="text" class="space-between color center" id="NFT_Name" name="NFT" placeholder="NFT Name">
                        </li>
                        <li>
                            <label for="price">Price:</label>
                            <input class="space-between center color" type="number" name="price" id="price" placeholder="0.0">
                        </li>
                        <li>
                            <label for="cat_add">Category:</label>
                            <select class="space-between color center" id="cat_add" name="product_cat">
                                <option value="1">Pixel</option>
                                <option value="2">2D</option>
                                <option value="3">3D</option>
                            </select>
                        </li>
                    
                        <li>
                            <label for="NFT_src">NFT IMG Link:</label>
                            <input type="text"  class="space-between color center" id="NFT_src" name="NFT_img" placeholder="NFT link">
                        </li>
                    </ul>
                    <ul style="margin-top:1.8rem">
                        <li>
                            <button type="submit" name="add" class="space-between color center" style="background-color: white">ADD</button>
                        </li>
                    </ul>

                </form>
            </div>
        </div>

        <div class="UPDATE bg-color flex flex-col">
            <div class="flex" style="justify-content:flex-end;">
                <i class="CLOSE_UP fas fa-window-close" style="font-size: 3em; float:right; margin:1.5rem"></i>
            </div>
            <div class="">
                <form action="crud_DB.php" method="POST" class="flex flex-col">
                    <ul class="flex flex-row" style="justify-content: space-evenly; flex-wrap : wrap;">
                        <li>
                            <label for="NFT_Name">NFT Name:</label>
                            <input type="text" class="space-between color center" id="NFT_Name" name="NFT" placeholder="NFT Name">
                        </li>
                        <li>
                            <label for="price">Price:</label>
                            <input class="space-between center color" type="number" name="price" id="price" placeholder="0.0">
                        </li>
                        <li>
                            <label for="cat_add">Category:</label>
                            <select class="space-between color center" id="cat_add" name="product_cat">
                                <option value="1">Pixel</option>
                                <option value="2">2D</option>
                                <option value="3">3D</option>
                            </select>
                        </li>
                        <li>
                            <label for="NFT_src">NFT IMG Link:</label>
                            <input type="text" class="space-between color center" id="NFT_src" name="NFT_img" placeholder="NFT link">
                        </li>
                </ul>
                <ul style="margin-top:1.8rem">
                        <li>
                            <button type="submit" name="update" class="space-between color center" style="background-color: white;">UPDATE</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <script src="./public/js/helpers/helpers.js"></script>
    <script src="./public/js/sidebar-inventory.js"></script>
    <script>
        var add = document.querySelector(".ADD_BUTTON");
        add.addEventListener("click", dis_add);

        var update = document.querySelectorAll('.UPDATE_BUTTON').forEach(btn =>{
        btn.addEventListener('click', dis_update); });

        var closeX = document.querySelector('.CLOSE');
        closeX.addEventListener('click', close);
        var closeX_2 = document.querySelector('.CLOSE_UP');
        closeX_2.addEventListener('click', close);

        function close() {
            document.querySelector(".ADD").style.display = "none";
            document.querySelector(".UPDATE").style.display = "none";
            document.querySelector(".bg-blurr").style.display = "none";
        }

        function dis_add() {
            // alert(1);
            document.querySelector(".ADD").style.display = "block";
            document.querySelector(".bg-blurr").style.display = "block";
        }

        function dis_update() {
            // alert(1);
            document.querySelector(".UPDATE").style.display = "block";
            document.querySelector(".bg-blurr").style.display = "block";
        }
        // function dis_delete_confir(){
        //     document.querySelector(".DELETE_CONFIRM").style.display = "block";
        //     document.querySelector(".bg-blurr").style.display = "block";
        // }

        function ActivateRow(id) {
            let row = document.getElementById(id);
            // row.classList.add("active");
            row.classList.toggle("active");
<<<<<<< HEAD
        }

        // var sidebar_mediaQuery = windows.matchMedia('(max-width : 1200px');
        // sidebar_mediaQuery.addEventListener('resize', showSideBar(mm){
        //     if(mm.matches){
        //         var logo = document.querySelector('.responsive-sidebar');
        //         logo.addEvenetListener('click', show_sidebar());
        //     }
        // }
        // )
        // function show_sidebar(){
        //     // document.querySelector(".responsive-sidebar").style.display = "flex";
        //     var sidebar = document.querySelector('.sidebar');
        //     sidebar.classList.toggle("flex");
        // }

        var logo = document.querySelector('.logo');
            logo.addEventListener('click', show_sidebar);
        var logo_sidebar = document.querySelector('.logo_sidebar');
            logo_sidebar.addEventListener('click', hide_sidebar);

        function show_sidebar(){
            // var sidebar = document.querySelector('.sidebar');
            // sidebar.classList.(".display");
            let sidebar = document.querySelector(".sidebar");
            // if(sidebar.style.display == "block"){
            //     sidebar.style.display = "none";
            // }
            // else {sidebar.style.display = "block";}
            sidebar.style.display = "block";
            document.querySelector(".logo").style.display = "none";
            // sidebar.classList.toggle(".display"); 
            // sidebar.classList.toggle(".responsive-sidebar");            
=======
>>>>>>> 939bc8f10f30e348849160f8d8237787c0cefe5d
        }
        function hide_sidebar(){
            // var sidebar = document.querySelector('.sidebar');
            // sidebar.classList.(".display");
            let sidebar = document.querySelector(".sidebar");
            sidebar.style.display = "none";
            document.querySelector(".logo").style.display = "block";
            // let main_page = document.querySelector(".main-page");
            // main_page.classList.add("w-100");
            // sidebar.classList.toggle(".display"); 
            // sidebar.classList.toggle(".responsive-sidebar");            
        }

    </script>
</body>

</html>