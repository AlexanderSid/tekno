<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<h1>REGISTRASI</h1>
	<form action="<?php echo base_url('regis/register_user'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Register"></td>
			</tr>
		</table>
	</form>
	<a href = "<?php echo base_url('login'); ?>">Login?</a>
</body>
</html>