<?php
    require '../includes/cart.inc.php';
    require '../parts/headerCart.php';
?>

<!--SHOPPING CART-->
<div class="shopping-cart">
	<h2 class="header-color">Shopping Cart</h2>

	<?php
	if(isset($_SESSION["cart_item"])){
		$total_quantity = 0;
		$total_price = 0;
	?>
	<table class="tbl-cart">
		<thead>
			<tr>
				<th colspan="2">Product</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
				<th class="btnRemoveAction">Remove</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($_SESSION["cart_item"])) {
				foreach ($_SESSION["cart_item"] as $item){
					$item_price = $item["quantity"]*$item["price"];
			?>
						<tr>
							<td class="cart-image"><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /></td>
							<td><?php echo $item["name"]; ?></td>
							<td class="price"><?php echo "$".$item["price"]; ?></td>
							<td><?php echo $item["quantity"]; ?></td>
							<td class="price"><?php echo "$". number_format($item_price,2); ?></td>
							<td class="btnRemoveAction"><a href="products.php?action=remove&code=<?php echo $item["code"]; ?>"><i class="fas fa-trash"></i></a></td>
						</tr>
						<?php
						$total_quantity += $item["quantity"];
						$total_price += ($item["price"]*$item["quantity"]);
				}
						?>
		</tbody>
	</table>		
	<div class="subtotal">
		<span class="text">Subtotal</span>
		<span class="price"><?php echo "$ ".number_format($total_price, 2); ?></span>
	</div>
		<?php
			}
	} else {
	?>
	<div class="no-records">Your Cart is Empty</div>
	<?php 
	}

	?>
	<div class="buttons">
		<?php
		if(!empty($_SESSION["cart_item"])) {
			?>
			<button class="checkout">CHECKOUT</button>
			<form method="get" action="cart.php">
				<input type="hidden" name="action" value="empty">
				<input id="btnEmpty" type="submit" value="EMPTY CART">
			</form>
			<?php
		} else {
			?>
			<form method="get" action="cart.php">
				<input type="hidden" name="action" value="empty">
				<input id="btnEmpty" type="submit" value="EMPTY CART">
			</form>
			<?php
		}

		?>
	</div>
</div>

