<br><br><br>
<?php

$servername =  "c219um.forpsi.com:3306";
$username = "f111539";
$password = "Nv5AGNd";
$dbname = "f111539";

$con=mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$identifikator = $_GET['idd'];

$sql= "SELECT * FROM clanky WHERE id = $identifikator";

$result=mysqli_query($con,$sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $nadpis = $row["nadpis"]; 
  $textik = $row["textik"];
  $datum = $row["datum"];
  $autor = $row["autor"];
  $kategorie = $row["kategorie"];
  $id = $row ["id_clanku"];
?>

<div class="container">
  <div class="row">
    <div class="col">
    <h2><?php echo $nadpis ?></h2>
    <h4 class="text-secondary"><?php echo $datum?>&nbsp;&nbsp;&nbsp;<?php echo $autor?>&nbsp;&nbsp;&nbsp;<?php echo $kategorie?></h4>
    <p><?php echo $textik?></p><br>
    <a href="blog.php">Back to blog</a>
    </div>
  </div>
</div>

<?php 
  mysqli_free_result($result);
   mysqli_close($con);
?> 