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

$sql="SELECT * FROM clanky";
$result=mysqli_query($con,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  $nadpis = $row["nadpis"]; 
  $textik = $row["textik"];
  $datum = $row["datum"];
  $autor = $row["autor"];
  $kategorie = $row["kategorie"];
  $identifikator = $row ["id"];

?>



<div class="container">
  <div class="row">
    <div class="col">
    <h2><?php echo $nadpis ?></h2>
    <h4 class="text-secondary"><?php echo $datum?>&nbsp;&nbsp;&nbsp;<?php echo $autor?>&nbsp;&nbsp;&nbsp;<?php echo $kategorie?></h4>
    <p><?php 
$string = $textik;
if (strlen($string) > 200) {
$trimstring = substr($string, 0, 200);
} else {
$trimstring = $string;
}
echo $trimstring;
?></p><br>
    <a href="blog.php?id=read_more&idd=<?php echo $identifikator?>">Read more</a>
    </div>
  </div>
</div>

<?php 
} 
  mysqli_free_result($result);
   mysqli_close($con);
?> 