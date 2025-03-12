<?php include('header.php') ?>

<div class="container no-pad-max-992">

	<h2 class="heading-primary">My account</h2>

	<div id="my-account" class="clearfix">

		<p>Hello <span class="user">John Doe</span> (not John Doe? <a href="login.php">Sign out</a>). 
			From your account dashboard you can view your recent orders, 
			manage your shipping and billing addresses and <a href="edit-account.php">edit your password and account details.</a></p>

		<h3 class="heading-account">My subscriptions</h3>

		<!--
		<p>You have no active subscriptions. Sign up for your first subscription <a href="join.php">here</a>.</p>
		-->

		<div class="responsive-table clearfix">

			<div class="col-sm-6 col-md-2">
				<h4>Subscription</h4>
				<p><a href="view-order.php">#45678</a></p>
			</div>

			<div class="col-sm-6 col-md-2">
				<h4>Start Date</h4>
				<p>May 28, 2015</p>
			</div>

			<div class="col-sm-6 col-md-2">
				<h4>STATUS</h4>
				<p>Ongoing</p>
			</div>

			<div class="col-sm-6 col-md-2">
				<h4>TOTAL</h4>
				<p>$25.70 / month</p>
			</div>

			<div class="col-md-4">
				<h4>&nbsp;</h4>
				<p>
					<a href="change-payment-for-subscription.php" class="btn-orange small">Change Payment</a>
					<a href="change-address-for-subscription.php" class="btn-orange small">Change Address</a>
					<a href="#" class="btn-orange small">Suspend</a>
					<a href="#" class="btn-orange small">Cancel</a>
				</p>
			</div>

		</div>

		<h3 class="heading-account">Orders</h3>

		<div class="responsive-table clearfix">

			<div class="col-sm-6 col-md-2">
				<h4>ORDER</h4>
				<p><a href="view-order.php">#45678</a></p>
			</div>

			<div class="col-sm-6 col-md-2">
				<h4>Date</h4>
				<p>May 28, 2015</p>
			</div>

			<div class="col-sm-6 col-md-2">
				<h4>STATUS</h4>
				<p>Refunded</p>
			</div>

			<div class="col-sm-6 col-md-4">
				<h4>TOTAL</h4>
				<p>$25.70 / month for 1 item</p>
			</div>

			<div class="col-md-2">
				<h4>&nbsp;</h4>
				<p><a href="view-order.php" class="btn-orange small">View</a></p>
			</div>

		</div>

		<h3 class="heading-account">My addresses</h3>

		<div class="clearfix">
			<div class="col-md-6">
				<h3 class="heading-account small-font">Address 1<a href="edit-address.php">(edit)</a></h3>
				<p><i>John Doe</i></p>
				<p><i>Kidstir</i></p>
				<p><i>1933 Westridge Ter</i></p>
				<p><i>Los Angeles, CA 90049</i></p>
			</div>

			<div class="col-md-6">
				<br/><br/><br/><br/>
				<p><input type="radio" checked="checked"> Default Billing Address</p>
				<p><input type="radio"> Default Shipping Address</p>
			</div>
		</div>

		<div class="clearfix">
			<div class="col-md-6">
				<h3 class="heading-account small-font">Address 1<a href="edit-address.php">(edit)</a></h3>
				<p><i>John Doe</i></p>
				<p><i>Kidstir</i></p>
				<p><i>1933 Westridge Ter</i></p>
				<p><i>Los Angeles, CA 90049</i></p>
			</div>

			<div class="col-md-6">
				<br/><br/><br/><br/>
				<p><input type="radio"> Default Billing Address</p>
				<p><input type="radio" checked="checked"> Default Shipping Address</p>
			</div>
		</div>

		<div class="clearfix">
			<div class="col-md-12">
				<p>&nbsp;</p>
				<a href="edit-address.php">Add a new address?</a>
			</div>
		</div>

		<h3 class="heading-account">Manage my payment methods</h3>

		<!-- <p>You do not have any saved payment methods.</p> -->



		<div class="payment-methods responsive-table clearfix">

			<div class="col-sm-6 col-md-3">
				<h4>PAYMENT METHOD</h4>
				<p>MasterCard ending in 8281</p>
				<p>VISA ending in 9220</p>
			</div>

			<div class="col-sm-6 col-md-3">
				<h4>EXPIRES</h4>
				<p>01/20</p>
				<p>09/25</p>
			</div>

			<div class="col-sm-6 col-md-3">
				<h4>Default</h4>
				<p><input type="radio" checked="checked"></p>
				<p><input type="radio"></p>
			</div>

			<div class="col-sm-6 col-md-3">
				<h4>ACTIONS</h4>
				<p><a href="#"><i class="fa fa-close remove"></i></a></p>
				<p><a href="#"><i class="fa fa-close remove"></i></a></p>
			</div>


		</div>

	</div><!-- End of my-account -->

</div>

<?php include('footer.php') ?>