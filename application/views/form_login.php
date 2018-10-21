	<!DOCTYPE html>
	<html>

	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>login</title>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styles.min.css">
	</head>

	<body>
	    <div class="login-clean">
	        <form method="post" action="<?= base_url(); ?>/index.php/login/aksi_login">
	            <h2 class="sr-only">Login Form</h2>
	            <div class="illustration"><i class="icon ion-person"></i></div>
	            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div>
	            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
	            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
	            <h6 style="color: #b40951"><?= $this->session->flashdata('error'); ?></h6>
	        </form>
	    </div>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	</body>

	</html>