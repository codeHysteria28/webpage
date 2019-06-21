<?php 
include 'db.php';
session_start();

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Položka pridaná")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Položka vymazaná")</script>';
				echo '<script>window.location="eshop.php"</script>';
			}
		}
	}
}



?>

<!DOCTYPE html>
<html lang="sk">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Our eshop.Browse product.Find your best.Dont worry to contact us.">
<meta name="robots" content="index, follow">
<meta name="keywords" content="web,web design,designer,dizajn,tvorba www stranok,print graphic, 2D,vector,3D">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Global Graphic & design | ESHOP</title>
<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="style.css" />
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"rnC4s1Fx9f207i", domain:"globalgraphicdesign.eu",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=rnC4s1Fx9f207i" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->  
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130975904-1');
</script>
</head>
<body onload="myFunction()">
<script>
function myFunction() {
    alert("By clicking CLOSE, you agree with saving your personal data such as Name, Email, Address, Payment information");
}
</script>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
	<div class="navbar-header">
		<a href="#" class="navbar-brand text-white">Global Graphic & design | E-Shop</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="../../index.php"><span class="glyphicon glyphicon-home text-white"></span>Home</a></li>
		<li id="txt" style="color: #FFF;"></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart text-white"></span>Shopping Cart<span class="badge"></span></a>
			<div class="dropdown-menu" style="width:400px;">
				<div class="panel panel-primary">
					 <div class="panel-heading">
					 	<div class="row">
					 					<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="eshop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
				</table>
<!--paypal intregration--><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_bottom">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="TZF75CM6EGF5L">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
					 	</div>
					 </div>
					 <div class="panel-body"></div>
					 <div class="panel-footer"></div>
				</div>
			</div>
		</li>
		<li><a href="login.php"><span class="glyphicon glyphicon-thumbs-up text-white"></span>Log In</a></li>
		<li><a href="registracia.php"><span class="glyphicon glyphicon-user text-white"></span>Registration</a></li>
	</ul>
</div>
</div><br><br><br><br>

<div class="container-fluid kategorie">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-2">
			<div class="nav nav-pills nav-stacked">
				<li class="active"><a href="#"><h2>Category</h2></a></li>
				<li><a href="#">All</a></li>
				<li><?php echo htmlspecialchars($_SESSION["username"]); ?></li>
			</div>
		</div>
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-3">
				<form method="post" action="eshop.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="padding:16px;" align="center">
						<img style="width: 50%; height: 50%;" src="<?php echo $row["image"]; ?>" class="img-responsive"/><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">€<?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary" value="Pridať do košíka" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
		</div>
	</div>
	</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>