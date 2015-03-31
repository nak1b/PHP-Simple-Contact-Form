<?php 

	if($_POST['submit']){
		$result = '<div class="alert alert-success">Form Submitted</div>';

		if(!$_POST['name']){
			$error = "<br> Please enter your name";
		}

		if(!$_POST['email']){
			$error .= "<br> Please enter your email";
		}

		if(!$_POST['msg']){
			$error .= "<br> Please enter your message";
		}

		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) AND $_POST['email']) { 
    		$error .= "<br> Please enter a valid email address";
		} 

		if($error){
			$result = '<div class="alert alert-danger"> <strong>Therer were error in your form </strong><br>' .$error .'</div>';
		}
		else{
			if(mail("nbmomin14@gmail.com", "Message From Website", "Message")){
				$result = '<div class="alert alert-success">Thank You!</div>';

			}
		}
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="contact-form">
				<h1>Contact Form</h1>

				<?php echo $result; ?>

				<p class="lead">Please get in touch - i'll get back to yo as soon as i can</p>
				<form method="POST">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" class="form-control" placeholder="Your Name">
					</div>

					<div class="form-group">
						<label for="name">Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Your Email">
					</div>

					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" rows="3" name="msg"></textarea>
					</div>
					
					<input type="submit" name="submit" class="btn btn-success btn-lg" value="submit">
				</form>


			</div>	
		</div>
		

	</div>
</body>
</html>