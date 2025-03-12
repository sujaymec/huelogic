<?php include('header.php') ?>

<div class="container no-pad-max-992">

	<h2 class="heading-primary">Change Payment Method</h2>

	<div id="checkout-page" class="clearfix">
		<div id="checkout-intro" class="col-md-3 col-lg-4 ">

			<div class="coupon">
				<h3>Have a coupon?</h3>
				<a href="#">Click here to enter your code</a>
				<input type="text" class="form-control">
				<input type="submit" class="btn-orange">
			</div>

		</div>

		<div id="checkout-main" class="col-xs-12">

<!-- Form to be inserted here -->
<form>
			<div id="your-order" class="col-xs-12">
				<h3>Change Payment Method</h3>
				
				<div class="credit-card-info col-xs-12">
					<img class="credit-card" src="assets/img/credit-cards.png">
				</div>

				<p class="col-xs-12">Pay securely using your credit card</p>

				<div class="credit-card-info col-xs-12">
					<input type="radio" checked="checked">
					<p>MasterCard ending in 8281 (expires 01/20)</p>

					<input type="radio">
					<p>Visa ending in 9220 (expires 05/20)</p>

					<input type="radio">
					<p>Use a new credit card</p>
				</div>

				<div class="credit-card-info col-xs-12">
					<a href="my-account.php" class="btn btn-orange">Update</a>
				</div>


			</div>

			</form>
		</div><!-- End of checkout main -->

	</div><!-- End of checkout -->





</div>

<?php include('footer.php') ?>