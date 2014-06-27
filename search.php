<?php
$searchString = filter_input(INPUT_GET, 's', FILTER_SANITIZE_SPECIAL_CHARS);
include "includes/dbconnect.php";
include "includes/item.php";

$searchQuery = $db->prepare("SELECT * FROM items WHERE NAME LIKE '%{$searchString}%' OR NAME LIKE '%{$searchString}' OR NAME LIKE '{$searchString}%'");
$searchQuery->execute();
$affectedRows = $searchQuery->rowCount();

?>
<html>

<head>
	<title>"<?php echo $searchString ?>" Search Results - Shop</title>
	<link href="css/css.css" rel="stylesheet" type="text/css"/>
	<script type ="text/javascript" src="js/jquery-2.1.1.min.js"> </script>
<script type="text/javascript">
$(document).ready(function(){
	$(".item").click(function(){
		$(this).animate({
		right: '200px'
		});
	});
});


</script>
</head>

<body>
	<div class="wrapper">
		<?php
		while($affectedRows > 0)
		{
			$result = $searchQuery->fetch(PDO::FETCH_ASSOC);
			$item = new Item($result['ID'], $result['DATE'], $result['NAME'], $result['STOCK'], $result['DESCRIPTION']);
			$item->echoItem();
			$affectedRows--; 
		}
		
		
		
		?>
		
	</div>


</body>	

</html>