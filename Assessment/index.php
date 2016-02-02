<!-- Twilio App: Keenan Johnson -->
<!doctype html>
<html>
<head>
    <title>Twilio Texting App</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<style>
		html, body {
			height: 100%;
		}
	
		.container {
			background-image:url("app-background-photo.png");
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center;
			padding-top: 150px;
		}
		
		.center {
			text-align: center;
		}
		
		.white {
			color: white;
		}
		
		p {
			padding-top: 15px;
			padding-bottom: 15px;
		}
		
		#send {
			margin-top: -15px;
		}
	</style>
	
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1 class="center white">Twilio Messaging App!</h1>
				<p class="lead center white">Enter a phone number!</p>
				<form action="send-sms.php" method="post">
					<div class="form-group">
						<input type="tel" class="form-control"  name="p_num" placeholder="Please enter a valid North American phone number (ex. 555-555-5555)"></input>
					</div>
				
					<p class="lead center white">Enter your text message and hit send!</p>
				
					<div class="form-group">
						<input type="text" class="form-control" id="message" name="message"></input>
					</div>
					<button type="submit" class="btn btn-success btn-lg">Send</button>
				</form>
			</div>
		</div>
	</div>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
