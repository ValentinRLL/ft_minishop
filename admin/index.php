<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>ft_apple</title>
	<?php include('css-handler.php');?>
</head>
<body>
  <?php 

include("../functions/product.php");
include("../functions/category.php");
include("../functions/admin.php");
include("../functions/get_all_items.php");
$orders = get_all_orders();
?>
<?php
include("admin-header.php");
include("admin-banner.php");
include("orders-list-core.php");
?>
<?php
include("../footer.php");
?>
</body>
</html>