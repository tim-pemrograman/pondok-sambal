<!-- Outer Row -->
<div class="row justify-content-center">

	<div class="col-xl-10 col-lg-12 col-md-9">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block" style="background: url('https://www.goindonesiatours.com/wp-content/uploads/Indonesia-Traditional-Food-Top-10-Indonesia-Food-Must-try.jpg'); background-position: center; background-size: cover;"></div>
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
							</div>
							<?php echo $this->session->flashdata('message'); ?>
							<form class="user" method="POST" action="<?= base_url('admin/auth'); ?>">
								<div class="form-group">
									<input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
										aria-describedby="emailHelp" placeholder="Enter Email Address...">
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control form-control-user"
										id="exampleInputPassword" placeholder="Password">
								</div>
								<input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
