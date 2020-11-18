<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <?php
        require"mysqli_connect.php";
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
          $username = $_POST['user']; 
            $password = $_POST['password'];
        
            if(!empty($username) && !empty($password)){
                
                $q = "SELECT * FROM users WHERE username = ? AND password = ? ";
                $r = mysqli_prepare($dbc, $q);
                mysqli_stmt_bind_param($r, "ss", $username, $password);
                mysqli_stmt_execute($r);
                mysqli_stmt_store_result($r);
    
    
    if(mysqli_stmt_affected_rows($r)) {
         header("Location:crud.php");
        }
                
            }
        }
        
        
    ?>
    </body>


</html>