<?php
include "../includes/config.php";

if (isset($_GET['term'])){
	$return_arr = array();
 
	try {
	    $conn = new PDO("mysql:host="{$dbIP}";dbname="{$dbName}, {$dbUser}, {$dbPW});
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare('SELECT NAME FROM items WHERE NAME LIKE :term');
	    $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
	    
	    while($row = $stmt->fetch()) {
	        $return_arr[] =  $row['NAME'];
	    }
 
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
 
 
    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);

?>
