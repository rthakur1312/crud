<!DOCTYPE HTML>

<html>
    
    <head>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>

    <body>



<?php



require"mysqli_connect.php";
        
        session_start();
        
        if (isset($_GET['delete'])) {
                echo "hello";
            }
      
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $product = $_POST['product'];
    $inventory = $_POST['inventory'];
    
    if(!empty($product) && !empty($inventory)) {
    
    $query = "INSERT INTO Products VALUES (NULL, ?, ?)";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "ss", $product, $inventory );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
        
         if(mysqli_stmt_affected_rows($stmt) > 0) {
        
         
        echo "<h3>Product successfully added</h3> <br> ";
        
        }
    
            
            else {
                echo "<div class = 'orderPlaced'>";
                echo " <h3>Missing data - Please <a class = 'tryAgain' href = 'sell.php'> try again </a> </h3>";
                echo "</div>";
            }
    }
}
   
            
        
        
        
    
    








?>
        
        </body>
    
    </html>