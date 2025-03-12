<?php include('header.php') ?>

<div class="container no-pad-max-992">


	<div id="kit-form" class="clearfix">
		<div id="kit-image" class="col-md-3 col-lg-3 ">
			<h3>Click on the photos below to see what's inside!</h3>
			<img src="assets/img/product_arrow.png">
			<a href="assets/img/kit-form-1.jpg" rel="prettyPhoto[gallery1]"><img src="assets/img/kit-form-1.jpg" alt="Alternate text" /></a>
			<a href="assets/img/kit-form-2.jpg" rel="prettyPhoto[gallery1]"><img src="assets/img/kit-form-2.jpg" alt="Alternate text" /></a>
			<a href="assets/img/kit-form-3.jpg" rel="prettyPhoto[gallery1]"><img src="assets/img/kit-form-3.jpg" alt="Alternate text" /></a>
			<a href="assets/img/kit-form-4.jpg" rel="prettyPhoto[gallery1]"><img src="assets/img/kit-form-4.jpg" alt="Alternate text" /></a>
		</div>

		<div id="kit-main" class="col-md-6 col-lg-6 clearfix">

			<h3>Grab & Go Snacks Kit</h3>

			<p>$24.95</p>

			<p>Make some yummy snacks to eat on the run!</p>

			<p>When a snack attack hits, grab a healthy snack from scratch! In this kit, you'll find three fun and easy snack recipes made with good-for-you ingredients. You'll also learn facts about yogurt and wheat, discover tips and tricks for your new kitchen tools, and play some foodie games.</p>

			<p>For a high-protein snack on a hot day, make your own Yummy Yogurt Bark with Stoneground Crisps and seasonal berries. Next, buy and wash farmer's market kale in your new eco-friendly Veggie Bags and bake Power Munchies. Then use your adorable Colorful Cutters to stamp out wholesome Animal Crackers.</p>

			<p>Pack your snack on the way out the door - and enjoy!</p>



			<!--
			<div class="clearfix">
			<input type="checkbox" id="parent-dropdown" class="floated-checkbox"><p>If the kits will not be shipped to your home, please click <label for="parent-dropdown">here</label></p>
			</div>
			-->

			<form>

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


				<div class="col-md-6"><p>Child's first name</p>
				<input type="text" class="form-control"></div>


				<div class="col-md-6"><p>Child's first name</p>
				<input type="text" class="form-control"></div>


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

				<div class="col-xs-12">
					<p>Gift Message (included In Email To Parent)</p>
					<textarea class="form-control"></textarea>
				</div>

			</form>

			
		</div><!-- End of kit-main -->


		<div id="order-summary" class="col-md-3">
			<div id="order-wrapper">
				<h5>Order Summary</h5>
				<p>Subtotal <span>$24.95</span></p> 
				<p>Options <span>$0.00</span></p>
				<p>Total <span>$24.95</span></p>
			</div>

			<a href="cart.php" class="btn-orange">Add to cart</a>
		</div>

	</div><!-- End of about -->


	
	<div id="cross-promote" class="clearfix">

		<h3 class="heading-account">Try these too!</h3>

		<div class="col-xs-6 col-sm-4 col-md-3">
			<a href="kit-form.php" class="single-kit">
				<img src="assets/img/join-image.jpg">
				<h4>Summer Sips! Kit</h4>
			</a>
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3">		
			<a href="kit-form.php" class="single-kit sold-out">
				<img src="assets/img/join-image.jpg">
				<span class="">Sold out</span>
				<h4>Summer Sips! Kit</h4>
			</a>
		</div>		
		<div class="col-xs-6 col-sm-4 col-md-3">
			<a href="kit-form.php" class="single-kit">
				<img src="assets/img/join-image.jpg">
				<h4>Summer Sips! Kit</h4>
			</a>
		</div>

		
		<div class="col-xs-6 col-sm-4 col-md-3">
			<a href="kit-form.php" class="single-kit">
				<img src="assets/img/join-image.jpg">
				<h4>Summer Sips! Kit</h4>
			</a>
		</div>


	</div>
	


</div>

<?php include('footer.php') ?>