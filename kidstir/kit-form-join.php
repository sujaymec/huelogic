<?php include('header.php') ?>

<div class="container no-pad-max-992">
	<h2 class="heading-primary">Send kids a box of cooking fun every month in the mail!</h2>

	<div id="kit-form" class="clearfix">
		<div id="kit-image" class="col-md-3 col-lg-3 ">
			<!-- <h3>Look What's Inside Grab & Go Snacks Kit</h3> -->
			<a href="assets/img/buysubscription.png" rel="prettyPhoto[gallery1]"><img src="assets/img/buysubscription.png" alt="Alternate text" /></a>
		</div>

		<div id="kit-main" class="col-md-6 col-lg-6 clearfix">

			<h3>Monthly Subscription</h3>

			<p>$24.95 <span>/ month</span></p>



			<form>

			<!--
			<p>Subscription Status</p>

			<div class="col-xs-12">
				<input type="radio" name="gender" id="new">
				<label for="new">New</label>
				<input type="radio" name="gender" id="return">
				<label for="return">Returning/Continuing</label>					
			</div>

			<p>If the child you are ordering for has previously had a Kidstir subscription, please select the Returning/Continuing option so we do not duplicate their prior kits.</p>
			-->
			
			<span class="clearfix">

				<div class="col-xs-12">
					<p>Subscription Start Month</p>
					<select>
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					
				</div>


				<!--
				<div class="clearfix">
				<input type="checkbox" id="parent-dropdown" class="floated-checkbox"><p>If the kits will not be shipped to your home, please click <label for="parent-dropdown">here</label></p>
				</div>
				

				<div class="col-md-6">
					<p>Parent's first name</p>
					<input type="text" class="form-control">
				</div>

				<div class="col-md-6">
					<p>Parent's last name</p>
					<input type="text" class="form-control">
				</div>


				<div class="col-xs-12">
					<p>Parent's E-mail</p>
					<input type="text" class="form-control">
				</div>
				-->

				<div class="col-xs-12">
					<p>Choose your child:</p>
					<select>
						<option>Himanshu Gupta (13/M)</option>
						<option>Pooja Gupta (8/F)</option>
					</select>
				</div>

				<p>Or, add a new child below:</p>

				<div class="col-md-6">
					<p>Child's first name</p>
					<input type="text" class="form-control">
				</div>


				<div class="col-md-6">
					<p>Child's last name</p>
					<input type="text" class="form-control">
				</div>


				<div class="col-md-6">				
					<p>Child's birthday</p>
					<select>
						<option>Month</option>
					</select>
					<select>
						<option>Day</option>
					</select>
					<select>
						<option>Year</option>
					</select>
				</div>

				<div class="col-md-6">				
					<p>Gender</p>
					<input type="radio" name="gender" id="male">
					<label for="male">Boy</label>
					<input type="radio" name="gender" id="female">
					<label for="female">Girl</label>					
				</div>

			</span>

				<div id="sibling-section">
					<p>Siblings can share one subscription or get their own goodies</p>
					<input type="checkbox" id="sibling-dropdown" class="floated-checkbox"><p><label for="sibling-dropdown">Add extra tools for a sibling into each kit + $10.00</label></p>

					<div class="col-xs-12">
						<p>Choose sibling:</p>
						<select>
							<option>Himanshu Gupta (13/M)</option>
							<option>Pooja Gupta (8/F)</option>
						</select>
					</div>

					<div class="col-xs-12">
						<p>Or, add a new sibling below:</p>
					</div>

					<span class="">
						<div class="col-xs-12">
							<p>Sibling's first name</p>
							<input type="text" class="form-control">
						</div>


						<div class="col-xs-12">
							<p>Siblings's last name</p>
							<input type="text" class="form-control">
						</div>

						<div class="col-xs-6">				
							<p>Sibling's birthday</p>
							<select>
								<option>Month</option>
							</select>
							<select>
								<option>Day</option>
							</select>
							<select>
								<option>Year</option>
							</select>
						</div>

						<div class="col-xs-6">				
							<p>Gender</p>
							<input type="radio" name="gender" id="male2">
							<label for="male2">Boy</label>
							<input type="radio" name="gender" id="female2">
							<label for="female2">Girl</label>					
						</div>
					</span>


				</div>


			</form>

			
		</div><!-- End of kit-main -->


		<div id="order-summary" class="col-md-3">
			<div id="order-wrapper">
				<h5>Order Summary</h5>
				<p>Subtotal <span>$24.95</span></p> 
				<p>Options <span>$0.00</span></p>
				<p>Subtotal <span>$24.95</span></p>
			</div>

			<a href="cart.php" class="btn-orange">Proceed to checkout</a>
		</div>

	</div><!-- End of about -->

	


</div>

<?php include('footer.php') ?>