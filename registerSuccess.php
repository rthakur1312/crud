<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <?php
        require"mysqli_connect.php";
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
          $username = $_POST['username'];  
        $password = $_POST['password'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            
            
            
            if(!empty($username) && !empty($password)){
                
                $query = "INSERT INTO users VALUES (NULL, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($dbc, $query);
                mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $username, $password );
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
    
    
   if(mysqli_stmt_affected_rows($stmt) > 0) {
       
      header("Location:login.php");
       
      }
            }
        }
        
        
    ?>
    </body>


</html>