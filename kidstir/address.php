<?php include('header.php') ?>

<div class="container no-pad-max-992">

	<h2 class="heading-primary">Select your address</h2>

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

			<div id="checkout-billing-address" class="col-md-6 clearfix">
				<h3>Billing address</h3>

				<div class="col-xs-12">	
					<p>Choose Existing</p>
					<select class="form-control">
						<option>4257 Hill Street Ottawa</option>
						<option>1382 Canterbury Court Catonsville</option>
					</select>
				</div>

				<div class="col-xs-12">	
					<p>- Or, add a new billing address -</p>
				</div>

				<div class="col-xs-12">	
					<p>Country<span class="asterisk">*</span></p>
					<select class="form-control">
						<option>USA</option>
						<option>Canada</option>
					</select>
				</div>


				<div class="col-xs-12 col-md-6">	
					<p>First Name<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
				</div>


				<div class="col-xs-12 col-md-6">	
					<p>Last Name<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
				</div>


				<div class="col-xs-12">	
					<p>Company Name<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
				</div>								


				<div class="col-xs-12">	
					<p>Address<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
					<input type="text" class="form-control">
				</div>


				<div class="col-xs-12">	
					<p>Town/City<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
				</div>

				<div class="col-xs-12 col-md-6">	
					<p>State<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
				</div>


				<div class="col-xs-12 col-md-6">	
					<p>Zip<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
				</div>

				<div class="col-xs-12 col-lg-6">	
					<p>Email Address<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
				</div>


				<div class="col-xs-12 col-lg-6">	
					<p>Phone<span class="asterisk">*</span></p>
					<input type="text" class="form-control">
				</div>



				<!-- <div class="col-xs-12"><input type="submit" value="Submit" class="btn-orange">	</div> -->

			</div><!-- End of billing address -->



			<div id="checkout-alternate-address" class="col-md-6 clearfix">
				<h3>Ship to a different address?<input type="checkbox"></h3>

				<div class="col-xs-12">	
					<p>Choose Existing</p>
					<select class="form-control">
						<option>4257 Hill Street Ottawa</option>
						<option>1382 Canterbury Court Catonsville</option>
					</select>
				</div>

				<div class="col-xs-12">	
					<p>- Or, add a new shipping address -</p>
				</div>

				<span class="clearfix">

					<div class="col-xs-12">	
						<p>Country<span class="asterisk">*</span></p>
						<select class="form-control">
							<option>USA</option>
							<option>Canada</option>
						</select>
					</div>


					<div class="col-xs-12 col-md-6">	
						<p>First Name<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
					</div>


					<div class="col-xs-12 col-md-6">	
						<p>Last Name<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
					</div>


					<div class="col-xs-12">	
						<p>Company Name<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
					</div>								


					<div class="col-xs-12">	
						<p>Address<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
						<input type="text" class="form-control">
					</div>


					<div class="col-xs-12">	
						<p>Town/City<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
					</div>

					<div class="col-xs-12 col-md-6">	
						<p>State<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
					</div>


					<div class="col-xs-12 col-md-6">	
						<p>Zip<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
					</div>

					<div class="col-xs-12 col-lg-6">	
						<p>Email Address<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
					</div>


					<div class="col-xs-12 col-lg-6">	
						<p>Phone<span class="asterisk">*</span></p>
						<input type="text" class="form-control">
					</div>

				</span>


				<div id="bonus-magazine" class="clearfix">
					<div class="col-xs-12">	
						<p>Choose Your Bonus Magazine (US only)</p>
						<select class="form-control">
							<option>FamilyFun</option>
						</select>
						<p>For subscription and rebate details <a href="faq.php">click here.</a></p>
						<p>Ship Magazine to</p>
						<input type="radio">
						<p>Billing Address</p>
						<input type="radio">
						<p>Shipping Address</p>
					</div>




				</div>





				<span class="clearfix newsletter-signup">

					<div class="col-xs-12">	
						<p>How did you know about us</p>
						<select class="form-control">
							<option>Friend or family member</option>
						</select>
						<!-- <input type="checkbox">
						<p>Sign up for the newsletter</p> -->
					</div>

				</span>





			</div><!-- End of alternate address -->

<a href="checkout.php" class="btn-orange">Proceed</a>
			

			</form>
		</div><!-- End of checkout main -->

	</div><!-- End of checkout -->





</div>

<?php include('footer.php') ?>