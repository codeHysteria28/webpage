<?php

define('DB_SERVER', 'c219um.forpsi.com:3306');
define('DB_USERNAME', 'f111539');
define('DB_PASSWORD', 'Nv5AGNd');
define('DB_NAME', 'f111539');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>