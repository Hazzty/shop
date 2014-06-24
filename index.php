<!DOCTYPE html>
<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['cart'] = array();
/*fiskamåsarna*/
?>
<html lang="sv">

<head>
	<title>Shop</title>
	<link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?php include "includes/header.php";?>
<div class="wrapper">
	
		<div class="banner" style="background-image:url('img/banner.png'); background-size: cover;">
			<div style="width: 200px; height: 200px; margin-left: auto; margin-right: auto; padding-top: 10px"><img src="img/logo.png" width="200px" height="200px" /></div> 
			<h1 style="text-align: center; margin-bottom: 0px;">MojsStore.com</h1>
			<p style="text-align: center; margin-top: 0px; padding-bottom: 10px">Worldwide monopoly on everything from glassless glasses to pipes. </p>
		</div>
	
		<div class="search">
		<h2>What are you looking for?</h2>
			<form action="includes/search.php" method="get" accept-charset="UTF-8">
				<input type="text" placeholder="Search..." name="s"/>
				<input type="submit" />
			</form>
		</div>

</div>
	<?php include "includes/footer.php";?>
</body>
</html>


	