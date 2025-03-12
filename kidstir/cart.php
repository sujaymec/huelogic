<?php include('header.php') ?>


<div class="container no-pad-max-992">
	<h2 class="heading-primary">Enjoy your kits and share your adventures with us!</h2>

	<div id="cart" class="clearfix">


		<div id="cart-product" class="cart-section">
			<h4>Product</h4>
			<p class="value">
				<h5>Summer Sips Kit</h5>

				<p><span>Parent's first name:</span>    John</p>


				<p><span>Parent's last name:</span>    Doe</p>


				<p><span>Parent's email:</span>    <a href="#">johndoe@gmail.com</a></p>


				<p><span>Child's first name:</span>    Jane</p>


				<p><span>Child's last name:</span>    Doe</p>


				<p><span>Child's birthday:</span>    08/18/2011</p>


				<p><span>Gender:</span>    GirlBoy</p>

			</p>
		</div>

		<div id="cart-price" class="cart-section">
			<h4>Price</h4>
			<p class="value">$99.95</p>
		</div>

		<div id="cart-quantity" class="cart-section">
			<h4>Qty</h4>
			<p class="value">
				<input type="text" class="form-control" placeholder="1">
			</p>
		</div>

		<div id="cart-subtotal" class="cart-section">
			<h4>Subtotal</h4>
			<p class="value">$99.95</p>
		</div>

		<div id="cart-remove" class="cart-section">
			<h4>Remove</h4>
			<p class="value"><a href="#">X</a></p>
		</div>




	</div><!-- End of cart -->

	<div id="checkout" class="clearfix">
		<div class="col-md-7">
			<input type="text" placeholder="Coupon code" class="form-control">
			<a href="#" class="btn-orange">Apply coupon</a>
		</div>

		<div class="col-md-4 clearfix" id="subtotal">
			<p><span>Cart subtotal</span> #99.95</p>
			<p><span>Shipping and handling</span> #3.95</p>
			<p><span>Order total</span> <b>#103.90</b></p>
		</div>



		<div class="col-xs-12">
			<a href="address.php" class="btn-orange" id="checkout-button">Proceed to checkout</a>
		</div>		


	</div>




</div><!-- End of main container -->



<?php include('footer.php') ?>
