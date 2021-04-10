<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login and SignUp</title>
    <link rel="icon" href="<?= base_url('assets/images/logo.png')?>" type="image/x-icon" sizes="157x48">

    <link rel='stylesheet' href="<?= base_url('css/login.css') ?>" type='text/css' media='all' />

</head>

<body>
	<div class="wrapper">
		<div class="title-text">
			<div class="title login">
				Login Form</div>
			<div class="title signup">
				Signup Form</div>
		</div>
		<div class="form-container">
			<div class="slide-controls">
				<input type="radio" name="slide" id="login" checked>
				<input type="radio" name="slide" id="signup">
				<label for="login" class="slide login">Login</label>
				<label for="signup" class="slide signup">Signup</label>
				<div class="slider-tab">
				</div>
			</div>
			<div class="form-inner">
            <?php echo $this->session->flashdata('message'); ?>
            <form class="login" method="POST" action="<?= base_url('loginpage/login'); ?>">
					<div class="field">
						<input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input type="password" name="password" class="form-control form-control-user"id="exampleInputPassword" placeholder="Password" required>
					</div>
					<div class="pass-link">
						<a href="#">Forgot password?</a></div>
					<div class="field btn">
						<div class="btn-layer">
						</div>
						<input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">
					</div>
					<div class="signup-link">
						Not a member? <a href="">Signup now</a></div>
				</form>
				<form action="<?= base_url('loginpage/signup'); ?>" class="signup" method="POST">
					<div class="field">
						<input type="text" name="Fname" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" required>
					</div>
					<div class="field">
						<input type="text" name="Lame" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" required>
					</div>
					<div class="field">
						<input type="text" name="phone" class="form-control form-control-user" id="exampleLastName" placeholder="Phone Number" required>
					</div>
					<div class="field">
						<input type="text" name="address" class="form-control form-control-user" id="exampleLastName" placeholder="Address" required>
					</div>
					<div class="field">
					<input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input type="password" name="password" class="form-control form-control-user"id="exampleInputPassword" placeholder="Password" required>
					</div>
					<div class="field">
					<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirm Password" required>
					</div>
					<div class="field btn">
						<div class="btn-layer">
						</div>
						<input type="submit" name="submit" value="Signup" class="btn btn-primary btn-user btn-block">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type='text/javascript' src='<?= base_url('js/login.js')?>'></script>
</body>

</html>
