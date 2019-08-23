<?php
include('connect.php');

/**
 * 
 */
class view extends connection
{
	
	function __construct()
	{
		$connection = new connection;
		$this->conn = $connection->connect();
	}

	function show_products($product_name){
		$result = mysqli_query($this->conn,"SELECT * FROM products WHERE product_name LIKE '%$product_name%'");
		$result = mysqli_fetch_assoc($result);
		return $result;
	}
	
}
?>