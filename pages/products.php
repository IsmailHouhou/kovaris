<!--PHP STUFF-->
<?php
require '../includes/cart.inc.php';
?>


<!--HEADER-->
<?php
	require '../parts/headerProducts.php';
?>


		<!--LIST OF PRODUCTS-->
		<div class="product-grid">
			<h2 class="header-color">Products</h2>
			<div class="product-container">
                <?php

                $result = mysqli_query($conn, "SELECT * FROM tblproduct ORDER BY id ASC");
                while($row = mysqli_fetch_assoc($result)) {
                    echo   "<div class='product-item'>
                                <div class='product-image'>
                                    <img src='".$row["image"]."'>
                                </div>
                                <form method='post' autocomplete='off' action='products.php?action=add&code=".$row["code"]."'>
                                    <div class='product-tile-footer'>
                                        <p class='product-title'>".$row["name"]."</p>
                                        <div class='cart-action'>
                                            <p class='product-price'>$".$row["price"]."</p>
                                            <input class='product-quantity' type='text' name='quantity' value='1' />
                                            <input class='btnAddAction' type='submit' value='ADD TO CART' />
                                        </div>
                                    </div>
                                </form>
                            </div>";
                }
                ?>
			</div>
		</div>




		<!--FOOTER-->
		<?php
			require '../parts/footer.php';
		?>