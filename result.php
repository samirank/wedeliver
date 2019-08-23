<?php 
include('class/view.php');
$view = new view;

if (isset($_POST['search_product'])) {
	$product_name = $_POST['product_name'];


	print_r($view->show_products($product_name));
}


?>
