<!DOCTYPE html>
<html>
<head>
	<title>15001156</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
 
	<!--I use form_open to make form. i change the line 92 in autoload file in config as $autoload['helper'] = array('url','form') to creat form and acomplish the work done by action in form tag.  -->
	<form action="<?php echo base_url()?>/index.php/Welcome/sendmsg" method="post">	
		<div class="row">
			<div class="col-md-6">
				<h4>Phone Number</h4></br>
				<h4>Message</h4></br>

			</div>
			<div class="col-md-6">
				<input type="text" placeholder="phone Number" name="mobile" class="form-control"></br>
				<input type="text-area" placeholder="Message" name="message" class="form-control"></br>

			</div>
			

		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-2">
				<input type="submit" name="reg" value="submit" ></div>
			</div>
		</div>
</form> 
</body>
</html>