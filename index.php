<?php
	error_reporting();
	include('login.php'); // Include Login Script
	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}
?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Login Form with Session</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	 
	<body>
	<div class="form_area">
		<!--<h1>PHP Login Form with Session</h1>-->			
			<div class="error"><?php echo $error;?></div>
			<form method="post" action="">
				<fieldset>
					<legend>Login Form</legend>
					
					<table width="400" border="0" cellpadding="10" cellspacing="10" align="center">
						<tr>
							<td style="font-weight: bold">
								<div align="right">
									<label for="username">Username:</label>
								</div>
							</td>
							<td>
								<input name="username" type="text" class="input" size="25" required />
							</td>
						</tr>
						<tr>
							<td height="23" style="font-weight: bold">
								<div align="right">
									<label for="password">Password</label>
								</div>
							</td>
							<td>
								<input name="password" type="password" class="input" size="25" required />
							</td>
						</tr>
						<tr>
							<td height="23"></td>
							<td>
								<div align="left">
									<input type="submit" name="submit" value="Login" />
								</div>
							</td>
						</tr>
					</table>
				</fieldset>
			</form>
			<p style="text-align:center;">Are you registered? If not, <a href="registration.php">Registration</a></p>	
		</div>
	</body>
</html>