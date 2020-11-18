<html>

<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>


</head>

<body>
    
    <div class = "top">
        <div class = "topcontain">
    <h2 id="tophead"> Manage Stock </h2>
        
        <a href = "index.php"> Home </a>
            </div>
    
    </div>
    
    

    <?php  
        
        include "crud_code.php";
    ?>
    

    <?php

    
       
        
    
    if(isset($_GET['edit'])) {
        
            $update = true;
            $id = $_GET['edit'];
            $query = "SELECT * FROM Products WHERE id = $id";
            $result = mysqli_query($dbc, $query);
        
            while($row = mysqli_fetch_array($result)) {
                $updateProduct = $row['ProductName'];
                $updateInventory = $row['InventoryAmount'];
            }
        
    }
    
    
    
    ?>
    
    <div class = "container">
        
        <h3 id="add"> Add a New Product</h3>

    <form action=crud_code.php method="post" enctype="multipart/form-data">
        <input type = "hidden" name = "id" value = " <?php echo $id   ?>">
        <div class = "row">
        <div class = "col">
        <input id="in" type="text" placeholder = "Product" name="product" value="<?php echo $updateProduct ?>" >
            </div>
        <div class = "col">
        
        <input id = "num" type="text" placeholder = "Inventory" name="inventory" value="<?php echo $updateInventory  ?>">
            </div>
            
            
        <?php
        if($update == true){?>
            <div class = "col">
        <button class = "btn btn-success" name = "update" type = "submit"> Update
        </button>
                </div>
        <?php } else { ?>
            <div class = "col">
                <input type = "file" name = "image" id="image">
        <button class = "btn btn-success" name="addProduct" type="Submit" id="add"> Add </button>
                </div>
        <?php }  ?>
        </div>

    </form>
        </div>
    
    <?php 
    
    
    
        
        
        $query = "SELECT * FROM Products ORDER BY id DESC";
            $result = mysqli_query($dbc, $query);
        ?>
    
    <div class = "container">
    <table class = "table table-striped">
        <thead>
            <tr>
                <th>Product</th>
                <th>Inventory</th>
                <th>Action</th>
            </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $row['ProductName']; ?></td>
            <td><?php echo $row['InventoryAmount']; ?></td>
            
            
			<td>
                <a class = "btn btn-info" href="crud.php?edit=<?php echo $row['id']; ?>" >Edit</a>
                				
            <a class = "btn btn-danger"href="crud_code.php?delete=<?php echo $row['id']; ?>"> Delete </a>
			</td>
			

        </tr>
        <?php } ?>
    </table>
        </div>
    
    
    
    








    
</body>

</html>
