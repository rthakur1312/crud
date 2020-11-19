<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.

// Set the database access information as constants:
define('DB_USER', 'xwyk2lftsodx5ffs');
define('DB_PASSWORD', 'hyn1ujyz1sfxio3l');
define('DB_HOST', 'cdm1s48crk8itlnr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_NAME', 'xirdnub0067fny84');

// Make the connection:
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

//if($dbc) {
//    echo "Database connected";
//}


// Set the encoding...
mysqli_set_charset($dbc, 'utf8');
