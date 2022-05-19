<!doctype html>
<html lang="en">
  <head>
  	<title>Login 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Utilisateur </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
						<form action="<?php echo base_url ()?>index.php/Utilisateur/testLoginUtilisateur" class="login-form" method="POST">
		      		<div class="form-group">
		      			<input type="email" name="login" class="form-control rounded-left" placeholder="email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="mdp" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            		<?php if( isset($notif)) { ?>
	            		<div class="alert alert-danger" role="alert">
							<?php echo $notif; ?>	
						</div>
	            		<?php } ?>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

	</body>
</html>

