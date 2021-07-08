<!DOCTYPE HTML>
<html>
<head>
<title>EMERGENLINE || Emergency Admit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" >
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style_1.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
</head>
<body>
    <div class="bg-agile" style="padding:30px;">
	<div class="book-appointment">
	<h2><b>Medical Information</b></h2>
			<form action="func.php" method="post">
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>First Name</p>
						<input type="text" name="fname" placeholder="" required=""/>
					</div>
					<div class="gaps">
						<p>Last Name</p>
							<input type="text" name="lname" placeholder="" required=""/>
					</div>
					<div class="gaps">
						<p>Gender</p>
							<select class="form-control" name="gender">
								<option></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
					<div class="gaps">
						<p>Select Date</p>
						<input name="date" type="date" placeholder="date" required=""/>
					</div>
					<div class="gaps">
						<p>Phone Number</p>
						<input type="text" name="phonenumber" placeholder="" required=""/>
					</div>
				</div>

		<div class="right-agileinfo same">
					
					<div class="gaps">
						<p>Health condition</p>
						<textarea id="message" name="address" placeholder="" title="Please enter Your Comments"></textarea>
						</div>


					<div class="gaps">
						<p>Districts</p>
						<select class="form-control" name="city">
							<option></option>
							<option>Bagalkot</option>
							<option>Bengaluru Urban	</option>
							<option>Bengaluru Rural	</option>
							<option>Belagavi</option>
							<option>Bellary</option>
              				<option>Bidar</option>
              				<option>Vijayapura</option>
              				<option>Chamarajanagar</option>
            				<option>Chikballapur</option>
              				<option>Chikkamagaluru</option>
              				<option>Davanagere</option>
              				<option>Dharwad</option>
			  				<option>Gadag</option>
			  				<option>Hassan</option>
			 			    <option>Haveri</option>
							<option>Mysuru</option>
							<option>Kolar</option>
						</select>
					</div>

					<div class="gaps">
						<p>Home Phone</p>
						<input type="text" name="homephone" placeholder="" required=""/>
					</div>
				</div>
				<div class="clear"></div>
				<input type="submit" name="pat_submit"value="Submit">
			</form>
		</div>
   </div>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
				<link rel="stylesheet" href="css/jquery-ui.css" />
</body>
</html>
