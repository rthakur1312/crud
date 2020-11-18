<!DOCTYPE HTML>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="sellBack">

<?php
    
//    include "store.php";
    
    require "mysqli_connect.php";
    
    session_start();
    
    
    if(!empty($_GET['id'])){
        $_SESSION['item_selected'] = $_GET['id'];
        header("Location:updateproduct.php");
        
      
        
    }
    
    $query = "SELECT * FROM Products";
    $result = mysqli_query($dbc, $query);
    while($row = mysqli_fetch_array($result)){
        echo "<a href = '?id={$row['id']}'>
        {$row['ProductName']}</a>  {$row['InventoryAmount']} <br>";
    }
    
    ?>

    
   

</body>

</html>