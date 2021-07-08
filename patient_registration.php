<!DOCTYPE html>
<html lang="en">
<head>
	<title>EMERGENLINE || Patient Registration</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style_2.css">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
</head>
<body>
	<div class="w3ls-banner">
	<div class="heading" >
	<h1><big>&gt;New Patient Registration&lt;</big></h1>
		</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter Patients Details</h2>
				</div>
			<div class="agile-form">
				<form action="func.php" method="post">
					<ul class="field-list">
						<li>
							<label class="form-label">
								Full Name
							</label>
							<div class="form-input">
								<input type="text" name="patient_name" placeholder="Enter Patients Name" required  pattern="^[A-z . a-z]+">
							</div>
						</li>
						<li>
							<label class="form-label">
							   Gender
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									<option value="Transgender"> Transgender </option>
								</select>
							</div>
						<li>
						<li>
							<label class="form-label">
							   Mobile Number
							</label>
							<div class="form-input">
								<input type="text" name="mobile_number" placeholder="Mobile Number" required pattern="^[0-9]+">
							</div>
						</li>
						<li>
							<label class="form-label">
							   Date of Birth
							</label>
							<div class="form-input dob">
							   <input type="date" name="DOB" placeholder=" ">  
							</div>
						</li>
						<li>
							<label class="form-label">
							   Address
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="street_address" placeholder=" " required>
									<label class="form-sub-label1"> Street Address </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="city" placeholder=" " required>
									<label class="form-sub-label1"> City </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="zipcode" placeholder=" " required>
									<label class="form-sub-label1"> Postal / Zip Code </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="country" placeholder=" " required>
									<label class="form-sub-label1"> Country </label>
								</span>
							</div>
						</li>
						<li>
							<label class="form-label">
							   E-Mail Address
							</label>
							<div class="form-input">
								<input type="email" name="email" placeholder="myname@example.com" required pattern="^[a-z0-9@a-z.a-z]+">

							</div>
						</li>
						<li>
							<label class="form-label1" name="textarea">
								Mention the details of previous consultings with us.
							</label>
							<div class="form-input2">
								<textarea rows="5" cols="20"></textarea>

							</div>
						</li>
						<li class="last-type">
							<label class="form-label1">
								Select which types of appointment you require.
							</label>
							<div class="form-input2" >
								<input type="checkbox" name="test1" ><label class="type-of-test">Heart Checkup</label>
								<input type="checkbox" name="test2" ><label class="type-of-test">Eye Checkup</label>
								<input type="checkbox" name="test3" ><label class="type-of-test">Hearing Test</label>
								<input type="checkbox" name="test4" ><label class="type-of-test">Blood Test</label>
								<input type="checkbox" name="test5" ><label class="type-of-test">Normal Consulting</label>
								<input type="checkbox" name="test6" ><label class="type-of-test">Skin Care</label>
							</div>
						</li>
					</ul>
					<input type="submit" name="reg_submit" value="Register Yourself">
				</form>
			</div>
		</div>

	</div>
</body>
</html>
