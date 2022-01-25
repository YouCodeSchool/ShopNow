<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: login.php");
?>




       
    <!--     
        <div class="left-bar-container bg-color center">

            <div><a href="#"><img class="logo" src="public\assets\images\Logo.png"></a></div> -->
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
            <!-- <div class="CRUD flex flex-col center">
                <div class="ADD_BUTTON flex flex-row">
                    <div class="space-between_CRUD"><a href="#"><img src="public/assets/images/add.svg"></a></div>
                    <div class="space-between_CRUD"><h1><a href="#">ADD</a></h1></div>
                 </div>

                 <div class="UPDATE_BUTTON flex flex-row" >
                    <div class="space-between_CRUD"><a href="#"><img src="public/assets/images/update.svg"></a></div>
                    <div class="space-between_CRUD"><h1><a href="#">UPDATE</a></h1></div>
                 </div>

                 <div class="DELETE_BUTTON flex flex-row" >
                    <div class="space-between_CRUD"><a href="#"><img src="public/assets/images/delete.svg"></a></div>
                    <div class="space-between_CRUD"><h1><a href="#">DELETE</a></h1></div>
                 </div>
            </div> -->
            
            <!-- <div class="DELETE_CONFIRM">
                <form class="flex flex-row center">
                    <button type="submit" class="Proceed space-between_CRUD">Proceed</button>
            
                    <button type="submit" class="Cancel space-between_CRUD">Cancel</button>
                </form>
            </div> -->
        <!-- </div> -->