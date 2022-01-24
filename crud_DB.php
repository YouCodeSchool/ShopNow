
<?php 
    require('connect_DB.php');
    // Add a product to the DB
    if (isset($_POST['add'])){
        $nft_name = $_POST['NFT'];
        $add_price = $_POST['price'];
        $add_cat = $_POST['product_cat'];
        $add_img = $_POST['NFT_img'];
        
        $sql = "INSERT INTO product( productName, imgSrc, price, cat_id) VALUES ('$nft_name','$add_img','$add_price','$add_cat')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header('location: inventory.php');
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    }

    //DELETE from the DB
    if (isset($_POST['delete'])){
        $id = $_POST['id_product'];
        
        $sql = "DELETE FROM `product` WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "deleted";
            header('location: inventory.php');
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    }
    
    // UPDATE product
    if (isset($_POST['update'])){
      $id = $_POST["id_product"];


      $nft_name = $_POST['NFT'];
      $add_price = $_POST['price'];
      $add_cat = $_POST['product_cat'];
      $add_img = $_POST['NFT_img'];
      
      // $date = $_POST['creation-date'];
      
      $sql = "UPDATE product  SET productName ='$nft_name', imgSrc=' $add_img',price='$add_price',cat_id='$add_cat' WHERE 'id' = $id";
    
      if (mysqli_query($conn, $sql)) {
          echo "Record updated successfully";
          header('location: inventory.php');
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
  }



?>