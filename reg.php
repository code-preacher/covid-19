<?php
session_start();
error_reporting(0);
  include 'config.php';
  $q = $con->prepare("select id, name from states order by name");
  $q->execute();
  $q->bind_result($id,$state);
  $i = 0;
  $states = array();
  while ($q->fetch()) {
    $states["$state"] = $id;
    $i++;
  }
  $q->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SELF-ASSESSMENT COVID-19 RISK EXPOSURE SYSTEM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="margin-top: -150px;">
				<form action="check.php" class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-20" style="font-size: 20px;">
						Please provide all necessary data below....
					</span>
					<p>
								<?php if (!empty( $_SESSION['rmsg'])) {
									echo $_SESSION['rmsg']; 
								}
								$_SESSION['rmsg']=""; 
								 ?>
								
								
							</p>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Full name" required  />
						<span class="focus-input100">Full name</span>
						<span class="label-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Phone number is required">
						<input class="input100" type="text" name="phone" placeholder="Phone number" required  />
						<span class="focus-input100">Phone number</span>
						<span class="label-input100"></span>
					</div>

							<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email" required  />
						<span class="focus-input100">Email</span>
						<span class="label-input100"></span>
					</div>

							<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="password" placeholder="Password" required />
						<span class="focus-input100">Password</span>
						<span class="label-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<input class="input100" type="text" name="address" placeholder="Address" required  />
						<span class="focus-input100">Address</span>
						<span class="label-input100"></span>
					</div>

					<div class="" data-validate = "">
						<select class="input100" name="state" required="required" style="height: 70px;border-radius: 10px;"/>
						 <option value="">--------Select State of Residence--------</option>
                                             <?php foreach ($states as $key => $value): ?>
                                              <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                                                 <?php endforeach; ?>
                                             </select>
					</div>


<div class="container-login100-form-btn" style="margin-top: 10px;">
						<button  type="submit" name="sub" class="login100-form-btn">
							Sign up
						</button>
					</div>
					
						
						<span class="txt2">
							<a href="login.php" style="text-decoration: none;">
						Click to Login...
									<i class="fa fa-sign-in fa-2x"></i>
								</a>
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="index.php" style="text-decoration: none;">
						Go back to home?
									<i class="fa fa-home fa-2x"></i>
								</a>

						</span>
							
						</fieldset>
					</form>

				<div class="login100-more" style="background-image: url('img/s3.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>


