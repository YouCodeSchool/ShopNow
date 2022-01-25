// let header = `
//     <div class="header-wrapper flex p-1 justify-between items-center">
//         <h1 class="text-white cursor-pointer ">Dashboard</h1>
//         <div class="flex gap-3">
//             <form class="search-wrapper flex gap-3 bg-dark-blue rounded-sm ">
//                 <input id="search" name="search" class="bg-dark-blue p-1 outline-none rounded-sm text-white font-sm" type="text" placeholder="  Search..">
//                 <button style="margin-right:0.5rem;" class="bg-dark-blue outline-none rounded-sm text-white font-sm">
//                     <i class="fas fa-search text-white"></i>
//                 </button>
//             </form>
//             <div class="user bg-violet p-1 cursor-pointer rounded-full">
//                 <i class="fas fa-user text-white"></i>
//             </div>
//         </div>
//         <div>
//         <i class="fas fa-user text-white"></i>
//         </div>
//     </div>  
// `

// $('.header').innerHTML = header





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
    <?php require_once('header.php') ?>
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
                // [qsdqsqsdjhqsd] => ["qsd" , "dqs"] 
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
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(64, 240, 131, 0.2)',
                    'rgba(255, 37, 55, 0.2)',
                    'rgba(28, 248, 200, 0.2)',
                    'rgba(53, 31, 252, 0.2)',
                    'rgba(247, 7, 255, 0.2)',
                    'rgba(223, 113, 10, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(64, 240, 131, 1)',
                    'rgba(255, 37, 55, 1)',
                    'rgba(28, 248, 200, 1)',
                    'rgba(53, 31, 252, 1)',
                    'rgba(247, 7, 255, 1)',
                    'rgba(223, 113, 10, 1)'
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