<?php session_start();
//var_dump($_SESSION['cart']);
$carts = $_SESSION['cart'];
include "products.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>cart</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>

<body>
	<h1>Your cart</h1>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>#id</th>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php
		foreach ($carts as $key => $value):
			foreach ($products as $p):
				if ($p['id'] == $key):
		?>
					<tr>
						<td><?php echo $key ?></td>
						<td><?php echo $p['name'] ?></td>
						<td><?php echo $value ?></td>
						<td><?php echo $p['price'] ?></td>
						<td><a href="del.php?id=<?php echo $key ?>">Delete</a></td>
					</tr>
		<?php endif;
			endforeach;
		endforeach ?>
	</table>
</body>

</html>