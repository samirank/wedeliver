<?php 
/**
 * To make database connection
 */
class connection
{
	function connect(){
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = 'abc123';
		$db 	 = 'wedeliver';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

		if(! $conn ){
			die('Could not connect: ' . mysqli_error());
		}else{
			return $conn;
		}
	}
}

?>
