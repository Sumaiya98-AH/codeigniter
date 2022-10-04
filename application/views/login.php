<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>User Login & Registration</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">Login & Register</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('welcome') ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('welcome') ?>">Register</a>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="card" style="margin-top: 30px">
					<div class="card-header text-center">
						Login Now
					</div>
					<div class="card-body">
						<?php echo form_open('welcome/loginNow', ['class' => 'form-horizontal']); ?>

						<div class="mb-3">
							<label class="form-label">Email Address</label>
							<input type="email" placeholder="Email Address" name="email" class="form-control" id="email" aria-describedby="emailHelp">
							<div class="col-md-10">
								<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" name="password" placeholder="User Password" class="form-control" id="password">
							<div class="col-md-10">
								<?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>

						<div class="text-center">
						<?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']);?>
						</div>

						<?php
						if ($this->session->flashdata('error')) {	?>
							<p class="text-danger text-center" style="margin-top: 10px;"> <?= $this->session->flashdata('error') ?></p>
						<?php } ?>

						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>