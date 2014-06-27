<?php
 include 'config.php';
 //Creates a connection to the database, makes sure the connection uses charset: utf8
try {
    $db = new PDO("mysql:host=localhost;dbname=$dbName;charset=utf8", $dbUser, $dbPW);
} catch (PDOException $e) {
    print "PDOError!: " . $e->getMessage() . "<br/>";
    die();
}

?>