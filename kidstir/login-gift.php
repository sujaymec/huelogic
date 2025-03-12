<?php include('header.php') ?>

<div class="container no-pad-max-992">
	<h2 class="heading-primary">Welcome back. To access your account, log in below.</h2>

	<div id="login-container" class="clearfix">
		<div id="login" class="clearfix col-sm-12 col-md-8">

			<h3>Log in</h3>

			<form method="get" action="kit-form-gift.php">
				<p>Email address</p>
				<input type="text" class="form-control">
				<p>Password <a href="lost-password.php" class="pull-right"> Forgot your password?</a></p>
				<input type="password" class="form-control">
				<input type="submit" value="Log in" class="btn-orange">	
				<div class="remember-me">				
					<input type="checkbox" id="remember-me">
					<p><label for="remember-me">Remember me</label></p>
				</div>
				
			</form>

		</div><!-- end of login -->

		<div id="customers" class="col-sm-12 col-md-4">
			<h3>New customers</h3>
			<p>If this is your first time purchasing on our site, please create an account so you can manage your subscription going forward.</p>
			
			<form>
				<span class="">
				<p>Email address</p>
				<input type="text" class="form-control">
				<p>Password</p>
				<input type="password" class="form-control">
				<p>First name</p>
				<input type="password" class="form-control">	
				<p>Last name</p>
				<input type="password" class="form-control">	
				<div class="remember-me">				
					<input type="checkbox" id="sign-me-up">
					<p><label for="sign-me-up">Sign me up for the newsletter!</label></p>
				</div>
				</span>
				<a href="kit-form-gift.php" class="btn-orange">Register</a>
			</form>

		</div>

	</div>

</div>
<?php include('footer.php') ?>