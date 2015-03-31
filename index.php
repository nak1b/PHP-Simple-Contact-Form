<?php 

	if(isset($_POST['submit'])){

		//getting submitted values
		$name = htmlspecialchars(trim($_POST['name']));
		$email = htmlspecialchars(trim($_POST['email']));
		$msg = htmlspecialchars(trim($_POST['msg']));

		$result = '<div class="alert alert-success">Form Submitted</div>';
		$error = "";

		//checking if name, email and message are entered
		if(!$name){
			$error .= "<br> Please enter your name";
		}

		if(!$email){
			$error .= "<br> Please enter your email";
		}

		if(!$msg){
			$error .= "<br> Please enter your message";
		}

		//checking if valid email
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) AND $email) { 
    		$error .= "<br> Please enter a valid email address";
		} 

		if(!empty($error)){
			$result = '<div class="alert alert-danger"> <strong>Therer were error in your form </strong><br>' .$error .'</div>';
		}
		else{

			//constructing msg to send
			$emailMsg = "Name: " .$name ."<br> Email: " .$email ."<br> Message: " .$msg;

			//mailing the message
			if(mail("nbmomin14@gmail.com", "Message From Website", $emailMsg)){
				$result = '<div class="alert alert-success">Thank You!</div>';

			}
			else{
				$result = '<div class="alert alert-danger"> There was errror sending your message</div>';
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

				<?php if(isset($result)) echo $result; ?>

				<p class="lead">Please get in touch - i'll get back to yo as soon as i can</p>
				<form method="POST">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php if(isset($name)) echo $name; ?>">
					</div>

					<div class="form-group">
						<label for="name">Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php if(isset($email)) echo $email; ?>">
					</div>

					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" rows="3" name="msg"><?php if(isset($msg)) echo $msg; ?></textarea>
					</div>
					
					<input type="submit" name="submit" class="btn btn-success btn-lg" value="submit">
				</form>


			</div>	
		</div>
		

	</div>
</body>
</html>