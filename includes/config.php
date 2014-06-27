<?php
/*
	Table Structure
	Users: | ID | RANK | USERNAME | PASSWORD | NAME |
	Posts: | ID | DATE | TITLE | CONTENT | DESC | ID_AUTHOR | 
*/


$dbIP = 'localhost'; //IP of database server
$dbName = 'shop'; //The database's name
$dbUser = 'root'; //The username used to connect to the database
$dbPW = ''; //The password for the above username
$tblName = 'items'; //The table containing all blog entries
$postsPerScroll = 10; //Amount of entries to be loaded per scroll
?>