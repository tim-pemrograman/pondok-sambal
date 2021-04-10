<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login and SignUp</title>
    <link rel="icon" href="<?= base_url('assets/images/logo.png')?>" type="image/x-icon" sizes="157x48">

    <link rel='stylesheet' href="<?= base_url('css/style.css') ?>" type='text/css' media='all' />

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
            <form class="login" method="POST" action="<?= base_url('admin/auth'); ?>">
					<div class="field">
						<input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" required>
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
				<form action="#" class="signup">
					<div class="field">
						<input type="text" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input type="password" placeholder="Password" required>
					</div>
					<div class="field">
						<input type="password" placeholder="Confirm password" required>
					</div>
					<div class="field btn">
						<div class="btn-layer">
						</div>
						<input type="submit" value="Signup">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>
