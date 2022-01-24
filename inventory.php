
<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: /ShopNow/login.php");
    }
    $bit = 'Bitcoin';
?>

<?php require_once 'connect_DB.php'; 


$sql = "SELECT * FROM product_cat";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result , MYSQLI_ASSOC);
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
        <!-- <meta name="author" content=""> -->
        <meta name="application-name" content="ShopNow : Our NFT Selling Platform">
        <title>ShopNow</title>
        <!-- <link rel="stylesheet" href="/ShopNow/public/css/header.css">
        <link rel="stylesheet" href="/ShopNow/public/css/index.css">
    <link rel="stylesheet" href="/ShopNow/public/css/dashboard.css"> -->

        <link rel="stylesheet" href="public/css/inventory.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
        <!-- <style>
           
        </style> -->
  
</head>
<body class="flex flex-row">  
    <!-- <header> -->
    <!-- Left bar -->
       
        
        <div class="left-bar-container flex flex-col bg-color">

            <div style="display: flex;justify-content:center"><a href="#"><img class="logo" src="public\assets\images\Logo.png"></a></div>
            <!-- Switch pages : stats /inventory -->
            <!-- <div class="page-switcher">
                <div class="bg-color" id="invent-page">
                    <h2><a href="#">Inventory</a></h2>
                </div>
                <div id="stats-page">
                    <h2><a href="#">Stats</a></h2>
                </div>
            </div> -->
            <!-- CRUD operations -->
            <div class="CRUD flex flex-col center">
                <div style ="margin-top : 50%" class="DASHBOARD flex flex-row">
                    <!-- <div class="space-between_CRUD"><a href="#"><img src="public/assets/images/add.svg"></a></div>
                    <div class="space-between_CRUD"><h1><a href="#">ADD</a></h1></div> -->
                    <a href="/ShopNow/Dashboard.php">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style="width:100%; margin-top: 4rem; fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#fbbe54">
                                <path d="M64.5,14.33333h-35.83333c-7.90483,0 -14.33333,6.4285 -14.33333,14.33333v50.16667c0,7.90483 6.4285,14.33333 14.33333,14.33333h35.83333c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-50.16667c0,-7.90483 -6.4285,-14.33333 -14.33333,-14.33333zM143.33333,14.33333h-35.83333c-7.90483,0 -14.33333,6.4285 -14.33333,14.33333v21.5c0,7.90483 6.4285,14.33333 14.33333,14.33333h35.83333c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-21.5c0,-7.90483 -6.4285,-14.33333 -14.33333,-14.33333zM64.5,107.5h-35.83333c-7.90483,0 -14.33333,6.4285 -14.33333,14.33333v21.5c0,7.90483 6.4285,14.33333 14.33333,14.33333h35.83333c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-21.5c0,-7.90483 -6.4285,-14.33333 -14.33333,-14.33333zM143.33333,78.83333h-35.83333c-7.90483,0 -14.33333,6.4285 -14.33333,14.33333v50.16667c0,7.90483 6.4285,14.33333 14.33333,14.33333h35.83333c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-50.16667c0,-7.90483 -6.4285,-14.33333 -14.33333,-14.33333z"></path>
                            </g>
                        </g>
                        </svg>
                    </a>
                 </div>

                 <!-- <div class="INVENTORY flex flex-row" >
                    <div class="space-between_CRUD"><a href="#"><img src="public/assets/images/update.svg"></a></div>
                    <div class="space-between_CRUD"><h1><a href="#">UPDATE</a></h1></div>
                 </div>

                 <div class="STATS flex flex-row" >
                    <div class="space-between_CRUD"><a href="#"><img src="public/assets/images/delete.svg"></a></div>
                    <div class="space-between_CRUD"><h1><a href="#">DELETE</a></h1></div>
                 </div> -->
            </div>
            
            <!-- <div class="DELETE_CONFIRM">
                <form class="flex flex-row center">
                    <button type="submit" class="Proceed space-between_CRUD">Proceed</button>
            
                    <button type="submit" class="Cancel space-between_CRUD">Cancel</button>
                </form>
            </div> -->
        </div>
        <!-- sidebar -->
        <!-- <div style="width: 136px; background-color: #1F2344;" class="sidebar">
        </div> -->
        <div class="main-page flex flex-col">
            <!-- <div style="width : 100%">
            </div> -->
            <div class="SEARCH_MOBILE flex flex-row center margin" style="width : inherit;">
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
            <div class="flex flex-row center" style="margin-top : 0.8rem">
                <!-- <div class="flex flex-row center">
                    <h2>In Stock</h2>
                    <i class="fas fa-toggle-on space-between" style="font-size: 2rem;"></i>
                </div>  -->
                <form class="FILTER flex flex-row center">
                    <div class="flex flex-row center">
                        <h2 >Price : MIN</h2>
                            <!-- <label for="min-price"></label> -->
                            <input class="space-between color center" type="number" id="min-price" placeholder="0.0">
                        
                        <h2 >MAX</h2>
                        <!-- <form for="max-price"> -->
                            <input class="space-between color center" type="number" id="max-price" placeholder="0.0">
                        <!-- </form> -->
                    </div>
                    <div class="flex flex-row center">
                        <h2 >From  </h2>
                        <!-- <form for="start-date"> -->
                            <input class="space-between color center" type="date" id="start-date" placeholder="dd/jj/yyyy">
                        <!-- </form> -->
                        <h2 >To</h2>
                        <!-- <form for="end-date"> -->
                            <input class="space-between color center" type="date" id="end-date" placeholder="">
                        <!-- </form> -->
                    </div>
                    <div >
                        <button class="bg-color" onclick="sendData()" type="submit">FILTER</button>
                    </div>
                </form>

            </div>

            <!-- ADD PRODUCT -->
            <div class="ADD_BUTTON" style="width:95%; padding:1rem; display:flex; justify-content:flex-end;">
                <button style="background : none; border : none" ><a href="#"><img src="public/assets/images/add.svg"></a></button>
            </div>

            <!-- Products tables/pages -->
            <div class="flex center">
                <table class="center" style="table-layout: fixed; width : 100%;">
                    <tr>
                        <th><input type="checkbox" id="" name="" value=""></th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Add Date</th>
                        <th>Actions</th>
                        </tr>
                    <?php foreach ($row as $nft) { ?>
                        <tr id="<?php echo $nft['id']; ?>" onclick="ActivateRow('<?php echo $nft['id'];?>')">
                            <td><input type="checkbox" id="" name="" value=""></td>
                            <td><a href="#"><img src="<?php echo $nft['imgSrc'] ?>"></a>
                                <!-- <div style="display:flex;background-size:cover; width : 100%; height : 100%; background-image : url('<?php echo $nft['imgSrc'] ?>');">
                                    
                                </div> -->
                            </td>
                            <td><a href="#"><?php echo $nft['productName'] ?></a></td>
                            <td><a href="#"><?php echo $nft['price'] ?></a></td>
                            <td><a href="#"><?php echo $nft['catName'] ?></a></td>
                            <td><a href="#"><?php echo $nft['createdAt']; ?></a></td>
                            <td>
                                <div class="flex center">
                                    <form action="crud_DB.php" method="POST">
                                        <input type="text" name="id_product" hidden value="<?php echo $nft['id']; ?>">
                                        <button class= "DELETE_BUTTON filter-red" name="delete" style="padding-top : 1rem; background : none; border : none" ><a href="#"><img src="public/assets/images/delete.svg"></a></button>
                                            
                                    </form>
                                    <button class="UPDATE_BUTTON filter-green" name="update" style=" background : none; border : none" ><a href="#"><img src="public/assets/images/update.svg"></a></button>
                                </div>
                            </td>
                        </tr>
                    <!-- Send id of product to highlight the row if clicked -->
                    <?php } ?>
                        <!-- <tr>
                            <td><input type="checkbox" id="" name="" value=""></td>
                            <td><a href="#"><img src="https://lh3.googleusercontent.com/I76d2Kzg7DoKfGYvQHmEUNsdMp9dd-P8Vd3kErKMnbcUABl9goKO7H755maGbaaQVkUM_yxHcFYHEl7YqM-jRTLV3MTDYkh3TO2ekg=w600"></a></td>
                            <td><a href="#">Monkey</a></td>
                            <td><a href="#">0.0</a></td>
                            <td><a href="#">Pixel</a></td>
                            <td><a href="#">00/00/2022</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="" name="" value=""></td>
                            <td><a href="#"><img src="https://lh3.googleusercontent.com/WdxT9-tpMXozgLirIjhT-j2x4lUaLjYq7pBbzGW22cbxK9ie3W3WBzyNHSqNvPIDnBVSXjNfhQlvHxdwoI1ugX0p35M6ezsJqXgL6g=w600"></a></td>
                            <td><a href="#">Monkey</a></td>
                            <td><a href="#">0.0</a></td>
                            <td><a href="#">Pixel</a></td>
                            <td><a href="#">00/00/2022</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="" name="" value=""></td>
                            <td><a href="#"><img src="https://lh3.googleusercontent.com/9HoUFd3DKfRIYJqgCgDzBKBDBObEHyx2PeAysZ3MNdrie-JGM_YEXEniQJQDdlFezNhNKUfAXGvSgcKKLt1NMc7s5s8lEbtoVZTzJw=w361"></a></td>
                            <td><a href="#">Monkey</a></td>
                            <td><a href="#">0.0</a></td>
                            <td><a href="#">Pixel</a></td>
                            <td><a href="#">00/00/2022</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="" name="" value=""></td>
                            <td><a href="#"><img src="https://lh3.googleusercontent.com/v56aGEvNC_fdtJDsul-ankP_4HF8xmQn_5PziELrGLxsPwOCyBMHzbmiyohB6l-etGUykiAoEW2RiX9z7ZbpMXKLHrDrqk66SYP5Gmk=w600"></a></td>
                            <td><a href="#">Monkey</a></td>
                            <td><a href="#">0.0</a></td>
                            <td><a href="#">Pixel</a></td>
                            <td><a href="#">00/00/2022</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="" name="" value=""></td>
                            <td><a href="#"><img src="https://lh3.googleusercontent.com/LdcKUFaVIGZuCBjz1CXdWjBIDLM_71e-Z-6gyrPWVb-oglKR14Tg4GEyia3agwwMscCF3KNsYcYr8O9ETi8V0HUWpnuhJpwnbzsStw=w600"></a></td>
                            <td><a href="#">Monkey</a></td>
                            <td><a href="#">0.0</a></td>
                            <td><a href="#">Pixel</a></td>
                            <td><a href="#">00/00/2022</a></td>
                        </tr> -->
                  </table>
            </div>

            <!-- pagination -->
            <div style="display:flex; justify-content:center;" class="pagination">
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a class="active" href="#">2</a>
                <a href="#">3</a>
                <!-- <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a> -->
                <a href="#">&raquo;</a>
              </div>

              <!-- ADD PRODUCT BLOCK -->
            <div class="bg-blurr">    
            </div>
            <div class="ADD bg-color">
                <i class="CLOSE fas fa-window-close" style="font-size: 3em; float:right; margin:1.5rem"></i>
                <form action="crud_DB.php" method="POST" class="flex flex-col">
                        <ul class="flex flex-row" style="justify-content: space-evenly;">
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
                        
                            <!-- <li>
                                <label for="start">Date of creation:</label>
                                <input class="space-between color center" type="date" id="start" name="creation-date" value="2022-01-03" min="2022-01-03">
                            </li> -->
                            
                        </ul>
                        <ul>
                            <li>
                                <label for="NFT_src">NFT IMG Link:</label>
                                <input type="text" style="width : 40%;" class="space-between color" id="NFT_src" name="NFT_img" placeholder="NFT link"> 
                            </li>
                            <li>
                                <button type="submit" name="add" class="color" style="background-color: white; margin-top:0.5rem">ADD</button>
                            </li>
                        </ul>

                </form>
            
              </div>
              
              <div class="UPDATE bg-color">
                <i class="CLOSE_UP fas fa-window-close" style="font-size: 3em; float:right; margin:1.5rem"></i>
                <form action="crud_DB.php" method="POST" class="flex flex-col">
                        <ul class="flex flex-row" style="justify-content: space-evenly;">
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
                        
                            <!-- <li>
                                <label for="start">Date of creation:</label>
                                <input class="space-between color center" type="date" id="start" name="creation-date" value="2022-01-03" min="2022-01-03">
                            </li> -->   
                        </ul>

                        <ul>
                            <li>
                                <label for="NFT_src">NFT IMG Link:</label>
                                <input type="text" style="width : 40%;" class="space-between color" id="NFT_src" name="NFT_img" placeholder="NFT link"> 
                            </li>
                            <li>
                                <button type="submit" name="update" class="color" style="background-color: white; margin-top:0.5rem">UPDATE</button>
                            </li>
                        </ul>
                </form>
            </div>
        </div>

    
</body>>

<script>
    var add = document.querySelector(".ADD_BUTTON");
    add.addEventListener("click", dis_add);

    var update = document.querySelectorAll('.UPDATE_BUTTON').forEach(btn =>{
        btn.addEventListener('click', dis_update);
    });

    // var delete_event = document.querySelector('.DELETE_BUTTON');
    //     delete_event.addEventListener('click', dis_delete_confir);

    var closeX = document.querySelector('.CLOSE');
        closeX.addEventListener('click', close);
    var closeX_2 = document.querySelector('.CLOSE_UP');
        closeX_2.addEventListener('click', close);

    function close() {
            document.querySelector(".ADD").style.display = "none";
            document.querySelector(".UPDATE").style.display = "none";
            document.querySelector(".bg-blurr").style.display = "none";
    }
    
    function dis_add(){
        // alert(1);
        document.querySelector(".ADD").style.display = "block";
        document.querySelector(".bg-blurr").style.display = "block";
    }
    function dis_update(){
        // alert(1);
        document.querySelector(".UPDATE").style.display = "block";
        document.querySelector(".bg-blurr").style.display = "block";
    }
    // function dis_delete_confir(){
    //     document.querySelector(".DELETE_CONFIRM").style.display = "block";
    //     document.querySelector(".bg-blurr").style.display = "block";
    // }

    function ActivateRow(id){
        let row = document.getElementById(id);
        row.classList.add("active");
    }

</script>
</html>