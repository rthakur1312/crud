<!DOCTYPE HTML>

<html>
    
    <head>
    <link rel="stylesheet" href="style.css">
    </head>

<body>
    
       <nav>
            
            <span> Shoppy </span>
            <a href = "register.php"> Become a seller </a>
        
        </nav>

<?php

require"mysqli_connect.php";

session_start();
    
?>
    
   
    
    <?php
    
    echo "<div class = 'orderPlaced'>";
    echo "<div class = 'shopImage'>";
    
       echo "</div>";
         echo " <h2>Your order has been placed.</h2>";
         echo "<a class='continueLink' href = 'index.php'> Continue Shopping</a>"; 
         echo "</div>";
             
             $q = "UPDATE Products SET InventoryAmount = InventoryAmount - 1 WHERE InventoryAmount > 0 AND id = ?";
    
    $stmt = mysqli_prepare($dbc, $q);
    mysqli_stmt_bind_param($stmt, "i", $_SESSION['item_selected'] );
    mysqli_stmt_execute($stmt);
    






    
?>
        
    
    
     <div class = "footer">
        
            <div class = "aboutFooter">
                <h2> About </h2>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam. </p>
            
            
            </div>
            
            <div class="followUs">
                
             <i class="fa fa-twitter follow" style = "font-size:2.5em"></i>
                <i class="fa fa-facebook-f follow" style = "font-size:2.2em" ></i>
                <i class="fa fa-instagram follow" style = "font-size:2.2em"></i>
                
            
                
            
            </div>
            
           
  
            
            
        
        </div>
    </body>
    </html>
