<?php

require "mysqli_connect.php";



 $updateProduct = "";
    $updateInventory = "";
    $update = false;
    $id = 0;

if(isset($_POST['addProduct'])) {
   $product = $_POST['product'];
    $inventory = $_POST['inventory'];
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
        $query = "INSERT INTO Products VALUES (NULL, ?, ?, ?)";
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt, "sss", $product, $inventory, $img);
        mysqli_stmt_execute($stmt);
    
    header('location: crud.php');
}





if(isset($_POST['update'])) {
   
    $id = $_POST['id'];
    $newProduct = $_POST['product'];
    $newInventory = $_POST['inventory'];
    
    $query = "UPDATE Products SET InventoryAmount='$newInventory' WHERE id = $id";
    $stmt = mysqli_query($dbc, $query);
    
    header('location: crud.php');
                 
    
}

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM Products WHERE id = ?";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    
   header('location: crud.php');
}

 
    




?>