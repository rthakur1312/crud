<html>

<head>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="headerImage">

    </div>

    
    
    <?php

require "mysqli_connect.php";

session_start();

if(!empty($_GET['id'])){
$_SESSION['item_selected'] = $_GET['id'];
    
    header("Location: checkout.php");
}


$query = "SELECT * FROM ProductsTest";
$result = mysqli_query($dbc, $query);
        

while($row = mysqli_fetch_array($result)) {
    if($row['InventoryAmount'] > 0)
    {
    echo "<div class = 'product' style = 'text-align:center'>
    <a href = '?id={$row['id']}'>
    {$row['ProductName']}</a> <br> <span class = 'stock'> Only {$row['image_path']} left in stock </span></div> "
        ;
    }
    }

    ?>

</body>


</html>
