<!DOCTYPE html>
<html>
    <head>
        
          <link rel="stylesheet" type="text/css" href="style.css">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
    </head>
    <body>
        
        <nav>
            
            <span> <a href = "Index.php"> Shoppy </a> </span>
            <a href = "register.php"> Become a seller </a>
        
        </nav>
        
        <?php
        
        
        
        require "mysqli_connect.php";
        
        session_start();
        
        if(!empty($_GET['id'])){
            
            $_SESSION['item_selected'] = $_GET['id'];
    
                header("Location: checkout.php");
                }

        
        ?>
        
    
        
        <div class="headerImage">
            
        <div class = "text">
            
            <h2> Shop With Us</h2>
            
            <a href = "#pro"> Shop Now</a>
            
            </div>
        
                    
            </div>
        
        <div class = "producttext">
            
            <p class="popular" id="poptext"> Popular Products </p>
            <p class = "ourproducttext"> Our Products </p>
            <p class = "popular"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam. </p>
        
        
        </div>
        
        
        <?php
        
        $query = "SELECT * FROM Products";
            $result = mysqli_query($dbc, $query);
        ?>
        <div class = "productContainer">
            <?php
        
        while ($row = mysqli_fetch_array($result)) {
    

            
            ?>
         <div id="pro" class = "productImage" style = "text-align:center">
             
             <?php
            
                echo '<img class = "prodImg" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/> <br>
                <a class = "caption" href = "?id='.$row['id'].'"'.$row['ProductName'].'"> Buy </a> '
                
        ?>
             
            </div>
            
            <?php
       

        
            
             
        }
    
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
        </div>
           
        
        
    </body>

</html>
