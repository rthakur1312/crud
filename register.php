<!DOCTYPE HTML>

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
    
    
    <div class="container-fluid">
        
        <div class="row">
            <div id="loginback" class="col-md-6">
                
                <div class = "layer">
                    
                   <div class="layercenter">
                       <p id="welcome"> Welcome! </p>
                   <p id = "content"> Join our group in few minutes! Sign Up and get started. </p>
                    </div>
                </div>
                       

            </div>
            <div class="col-md-6">
                
                <div class="formcontainer">
                    
                    

                    <div class="centerForm">
                        
                        <h2> Sign Up </h2>

                        <form action="registerSuccess.php" method="post">

                            <label class="loginLabel">Firstname:</label><br>
                            <input type="text" name="firstName" placeholder="Enter your Firstname"><br>


                            <label class="loginLabel"> Lastname: </label><br>
                            <input type="text" name="lastName" placeholder="Enter your Lastname"><br>
                            
                            <label class="loginLabel"> Username: </label><br>
                            <input type="text" name="username" placeholder="Enter your Username"><br>
                            
                            <label class="loginLabel"> Password: </label><br>
                            <input type="password" name="password" placeholder="Enter your Password"><br>

                            <button type="submit"> Submit</button>
                            <p> Already have an account? <a href = "login.php"> Sign In</a></p>
                            

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>
    

    

</body>

</html>
