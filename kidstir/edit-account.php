<?php include('header.php') ?>

<div class="container no-pad-max-992">
	<h2 class="heading-primary">Edit account details</h2>

	<div id="edit-address" class="clearfix">

		<form>

			<div class="col-xs-12 col-md-6">			
				<p>First name<span class="asterisk">*</span></p>
				<input type="text" class="form-control">
			</div>

			<div class="col-xs-12 col-md-6">			
				<p>Last name<span class="asterisk">*</span></p>
				<input type="text" class="form-control">
			</div>

			<div class="col-xs-12">			
				<p>Email address<span class="asterisk">*</span></p>
				<input type="text" class="form-control">
			</div>

			<div class="col-xs-12">			
				<p>Current password (Leave blank to leave unchanged)</p>
				<input type="password" class="form-control">
			</div>

			<div class="col-xs-12">			
				<p>New password</p>
				<input type="password" class="form-control">
			</div>

			<div class="col-xs-12">			
				<p>Confirm new password</p>
				<input type="password" class="form-control">
			</div>


			<div class="col-xs-12">	
				<input type="submit" value="Save changes" class="btn-orange">	
			</div>
		</form>

	</div><!-- end of single-kits -->
</div>
<?php include('footer.php') ?>