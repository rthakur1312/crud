<!DOCTYPE HTML>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    
    
    <body >
        
        <nav>
            
            <span> Shoppy </span>
            <a href = "register.php"> Become a seller </a>
        
        </nav>


<div>
      <?php
    
  require"mysqli_connect.php";

    session_start();
    
    $nameErr = $lastErr =  $addErr = "";
    
    
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    $firstName = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $payment = $_POST['payment'];
      
        
        $q = "INSERT INTO Orders VALUES (null, '$firstName', '$lastName', '$payment', ". $_SESSION['item_selected'] ." )"; 
    
     if( mysqli_query($dbc, $q)) {
         
         if (!empty($firstName) && !empty($lastName) && !empty($address) && !empty($payment)){
         
             header("Location:formData.php");
     }
     
    
     if(empty($firstName)) {
    
            $nameErr = "Firstname is required";
        
        }
            
             if(empty($lastName)){
                $lastErr = "Lastname is required";
            }
            
             if(empty($address)){
                $addErr="Address is required";
            }
        
        
//        echo "<div class = 'orderPlaced'>";
//        echo " <h3>Missing data - Please <a class = 'tryAgain' href = 'checkout.php'> try again </a> </h3>";
//        echo "</div>";
        
    }
            }
    
    
     $id = $_SESSION['item_selected'];

    
    $query = "SELECT Image from Products where id = $id";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result);

    
?>
    <div class = "formcontainer">
    
    <div class="selectedImage">
    <?php
    
    
        echo '<img class = "prodImg" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>';
    
    
    
    ?>
    </div>
        
        
        
        
        


        

    <div class="checkForm">
<form action="" method="post">
    <h3> Checkout Form</h3>
    
     <input type="text" name="first_name" placeholder = "Firstname">
    <span class="error"> <?php echo $nameErr;?></span><br>
            
           
   
 <input type="text" name="last_name" placeholder="Lastname">
    <span class="error"> <?php echo $lastErr;?></span><br>
     <input type="text" name="address" placeholder="Address">
    <span class="error"> <?php echo $addErr;?></span><br>
     
        <select name="payment" placeholder = "select" <?php 
                if(isset($payment)) {
        
        echo "value = '$payment'";
    
    } 
                ?>><br>
            <option> Credit/Debit </option>
            <option> MasterCard </option>
            <option> GiftCard </option>
            <option> PayPal </option>
        </select>
    <p><input name = "submit" type="submit"></p><br>

</form>
        
        <?php
        
        $query = "SELECT InventoryAmount from Products where id = $id";
            $result = mysqli_query($dbc, $query);
            $row = mysqli_fetch_array($result);
        echo 'Only '.$row['InventoryAmount'].'<span> left in stock. </span>';
    
  
        
        
        ?>
        </div>
        
        
        </div>
    
        </div>
        
        <div>
            
            
        
        
        
        </div>
        
       
    
        
        
        
            
        
        
        
        
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
