<?php 
	session_start();
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'BookStore'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
	$book = $_POST['bname']; 
	$sql = 'DELETE FROM `books` WHERE name = "'. $book .'"';
	$retval = mysqli_query( $con, $sql );
	header ("location: index.php");
?>

