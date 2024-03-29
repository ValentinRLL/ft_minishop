<?php
// include('admin.php');

function add_product_to_cart( $product_ID, $product_quantity ){
	$product = product_array_by_ID($product_ID);
	if (!(update_current_user_cart($product_ID, $product_quantity)))
		return false;
	if ($product['product_stock'] < $product_quantity){
		// echo "No more ".$product['product_name']." available\n";
		return false;
	}
	unset($product['category_ID'], $product['product_description'], $product['product_stock'], $product['product_image'], $product['product_color']);
	$product['product_quantity'] = $product_quantity;
	// print_r($_SESSION['cart']);
	if ($_SESSION['user'] == NULL){
		$GLOBALS['cart'][] = $product;
		$GLOBALS['cart'][0] = intval($_SESSION['cart'][0] + $product['product_price'] * $product['product_quantity']);
	}
	else{
		$_SESSION['cart'][] = $product;
		$_SESSION['cart'][0] = intval($_SESSION['cart'][0] + $product['product_price'] * $product['product_quantity']);
	}
	// echo "Added to cart\n";
	return true;
}

function validate_cart( $user_ID ){
	if (!verify_current_user_order($user_ID))
		return false;
	return true;
}

function list_user_orders( $user_ID ){
	if (($array = user_orders_array($user_ID)) == NULL)
		return (NULL);
	else
		return $array;
}

function get_user_order( $user_ID, $order_ID ){
	if (($orders = user_orders_array($user_ID)) == NULL)
		return (NULL);
	$details = array();
	foreach ($orders as $order){
		if ($order['order_ID'] == $order_ID)
			$details = user_order_details_array($order_ID);
	}
	return ($details);
}

?>
