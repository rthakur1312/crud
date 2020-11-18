<?php

require "mysqli_connect.php";

//header('Location:sell.php');


$product = "";
    $Namount = "";
    $updateProduct = false;

session_start();

// if(isset($_GET['update'])) {
//                           
//    $updateProduct = true;
//    $id = $_GET['update'];
//    $query = "SELECT * FROM Products WHERE id = $id ";
//    $result = mysqli_query($dbc, $query);
//    
//      while($row = mysqli_fetch_array($result)) {
//        $product = $row['ProductName'];
//        $Namount = $row['InventoryAmount'];
//                               
//      }
// }
//          if(isset($_POST['update'])){
//        $updateid = $_POST['update'];
//        $newInventory = $_POST['amount'];
//                    
//        $q = "UPDATE Products SET InventoryAmount = $newInventory WHERE id = ?";
//        $res = mysqli_prepare($dbc, $q);
//        mysqli_stmt_bind_param($res, "i", $updateid);
//        mysqli_stmt_execute($res);
//        }
                                                             

if(isset($_POST['save'])){
    $product = $_POST['product'];
    $inventory = $_POST['amount'];
    
        $query = "INSERT INTO Products VALUES (NULL, ?, ?)";
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt, "ss", $product, $inventory);
        mysqli_stmt_execute($stmt);
}


if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM Products WHERE id = ?";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
}


 
        



?>