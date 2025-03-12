<?php include('header.php') ?>

<div class="container no-pad-max-992">
	<h2 class="heading-primary">Edit addresses</h2>

	<div id="edit-address" class="clearfix">

		<form>
			<h4>Update address</h4>

			<div class="col-xs-12 col-md-6">			
				<p>First name<span class="asterisk">*</span></p>
				<input type="text" class="form-control">
			</div>

			<div class="col-xs-12 col-md-6">			
				<p>Last name<span class="asterisk">*</span></p>
				<input type="text" class="form-control">
			</div>

			<div class="col-xs-12">			
				<p>Company name</p>
				<input type="text" class="form-control">
			</div>

			<div class="col-xs-12">			
				<p>Address<span class="asterisk">*</span></p>
				<input type="text" class="form-control" placeholder="Street Address">
				<input type="text" class="form-control" placeholder="Apartment, Suite, Unit etc (Optional)">
				<input type="text" class="form-control" placeholder="Town/City">
			</div>

			<div class="col-xs-12 col-md-6">			
				<p>State<span class="asterisk">*</span></p>
				<select class="form-control">
					<option>California</option>
				</select>
			</div>

			<div class="col-xs-12 col-md-6">			
				<p>Zip<span class="asterisk">*</span></p>
				<input type="text" class="form-control">
			</div>

			<div class="col-xs-12">			
				<p>Country<span class="asterisk">*</span></p>
				<select class="form-control">
					<option>Country</option>
				</select>
			</div>

			<div class="col-xs-12 col-md-6">			
				<p>Phone<span class="asterisk">*</span></p>
				<input type="text" class="form-control">
			</div>

			<!--
			<div class="col-xs-12">	
				<input type="checkbox" id="billing-update">
				<label for="billing-update">Update the billing address used for <b>all</b> of my active subscriptions</label>	
			</div>
			-->

			<div class="col-xs-12 col-md-12">
				<p><span class="asterisk">*</span>IMPORTANT: Please note that this will update the address for all subscriptions to which this address was associated with. If your credit card address records do not match the above information, it could cause your subscriptions to fail.</p>
				<p>Incase you wish to update the address only for specific subscriptions, <a href="edit-address.php">add a new address</a> and update it for that subscription.</p>
			</div>

			<div class="col-xs-12">	
				<input type="submit" value="Save address" class="btn-orange">	
			</div>


		</form>

	</div><!-- end of single-kits -->
</div>
<?php include('footer.php') ?>