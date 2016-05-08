<?
	error_reporting(0);
	$db = mysqli_connect("localhost","root","","login");

	if(isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		 
		$username = mysqli_real_escape_string($db, $username);
		$email = mysqli_real_escape_string($db, $email);
		$password = mysqli_real_escape_string($db, $password);
		$password = md5($password);
		
		$sql = "SELECT email FROM users WHERE email='$email'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		 
		if(mysqli_num_rows($result) == 1)
		{
			echo "Sorry...This email already exist..";
		}
		else
		{
			//Code goes here.
			$query = mysqli_query($db, "INSERT INTO users (username, email, password)VALUES ('$username', '$email', '$password')");
	 
			if($query)
			{
				$error = "Thank You! you are now registered.";
			}
		}

	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	 
	<body>
		<div class="form_area">
			<a href="index.php"><input type="button" value="Back"></a>
			<div class="error"><?php echo $error;?></div>
			<form method="post" action="">
				<fieldset>
					<legend>Registration Form</legend>			
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
							<td style="font-weight: bold">
								<div align="right">
									<label for="email">Email</label>
								</div>
							</td>
							<td>
								<input name="email" type="email" class="input" size="25" required />
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
									<input type="submit" name="submit" value="Register" />
								</div>
							</td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
	</body>
</html>