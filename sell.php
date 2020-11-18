<!DOCTYPE HTML>

<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>

   

    <?php
    
    
    
    
    
require "mysqli_connect.php";
    
    include "process.php";
    
    if(!empty($_GET['id'])){
        $_SESSION['item_selected'] = $_GET['id'];
//       header("Location:updateproduct.php");
        
      
        
    }
    ?>
    <div class="container">
        <?php
    $query = "SELECT * FROM Products";
    $result = mysqli_query($dbc, $query);
        ?>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th> Product Name </th>
                    <th> Inventory </th>
                    <th> Action </th>
                </tr>
            </thead>

            <?php
            
            
                while ($row = mysqli_fetch_array($result)): 
            ?>
            <tbody>

            <tr>
                <td> <?php echo $row['ProductName']  ?></td>
                <td> <?php echo $row['InventoryAmount'] ?></td>
                <td></td>
                <td>
                    <a href="sell.php?update=<?php echo $row['id'];?>" class="btn btn-info"> Update </a>
                    <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger"> Delete </a>

                </td>
            </tr>
                </tbody>

            <?php endwhile; 
            
            ?>
        </table>
        
        <?php
        
       
      
        
   
        
    
    ?>
    </div>
    
    
    
    
    <div class="mx-auto" style="width:1000px;">
        <form method="POST" action = "process.php">
            <div class="row wrapper">
                <div class="col">
                    <input type="text" class="form-control" name="product" placeholder="Product Name" value="<?php echo $product; ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="amount" placeholder="Inventory" value="<?php echo $Namount; ?>">
                </div>
                <?php
        if ($updateProduct == true) {
          ?>


                <input type = "submit" id="button" name="update" value = "Update">

                <?php
      }
      else { ?>

                <div class="col">
                    <input id="button" name = "save" type="submit" value="Add Product">
                </div>
            </div>

            <?php  
       
        }
      
      ?>
        </form>
    </div>
    



<script>
    
    
    </script>
</body>

</html>
