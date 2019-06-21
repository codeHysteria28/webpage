<?php
$conn_server = "c219um.forpsi.com:3306";
$conn_user   = "f111539";
$conn_pass   = "Nv5AGNd";
$database    = "f111539";

$mysqli=new mysqli ($conn_server,$conn_user,$conn_pass,$database);
if ($mysqli->connect_errno) {
  printf ("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
else echo "Pripojeno, server " . $mysqli->server_info;
?>