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
						<textarea class="form-control" rows="3"></textarea>
					</div>
					
					<input type="submit" class="btn btn-success btn-lg" value="submit">
				</form>


			</div>	
		</div>
		

	</div>
</body>
</html>