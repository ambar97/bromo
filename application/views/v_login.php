<?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
<div class="row page-title">
		<div class="container clear-padding text-center flight-title">
			<h3>LOGIN/REGISTER</h3>
			<h4 class="thank">Manage Your Account</h4>
		</div>
	</div>
	<!-- END: PAGE TITLE -->
	
	<!-- START: LOGIN/REGISTER -->
	<div class="row login-row" style="background-color: white">
		<div class="container clear-padding">
			<div class="col-sm-2 useful-links">
				<h4>Useful Links</h4>
				<a href="#">Become A Partner</a>
				<a href="#">Career</a>
				<a href="#">Developers</a>
				<a href="#">FAQ</a>
				<a href="#">Partners</a>
				<a href="#">Terms Of Use</a>
				<a href="#">Privacy Policy</a>
			</div>
			<div class="col-sm-5 login-form">
				<h4>Login</h4>
				<form >
					<label>Username/Email</label>
					<div class="input-group">
						<input name="username" type="email" class="form-control" placeholder="Username/Email" required>
						<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
					</div>
					<label>Password</label>
					<div class="input-group">
						<input name="password" type="password" class="form-control" placeholder="Password" required>
						<span class="input-group-addon"><i class="fa fa-eye fa-fw"></i></span>
					</div>					
					<button type="submit">LOGIN <i class="fa fa-sign-in"></i></button>
				</form>
			</div>
			<div class="col-sm-5 sign-up-form">
				<h4>Sign Up</h4>
				<form >
					<label>Username/Email</label>
					<div class="input-group">
						<input name="username" type="email" class="form-control" placeholder="Username/Email" required>
						<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
					</div>
					<label>Password</label>
					<div class="input-group">
						<input name="password" type="password" class="form-control" placeholder="Password" required>
						<span class="input-group-addon"><i class="fa fa-eye fa-fw"></i></span>
					</div>	
					<label>Confirm Password</label>
					<div class="input-group">
						<input name="confirm-password" type="password" class="form-control" placeholder="Retype Password">
						<span class="input-group-addon"><i class="fa fa-eye fa-fw"></i></span>
					</div>	
					<input name="tc" type="checkbox"> I agree To Terms & Conditions
					<button type="submit">REGISTER ME <i class="fa fa-edit"></i></button>
				</form>
			</div>
		</div>
	</div>
	<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
</body>
</html>