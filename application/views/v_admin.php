<!DOCTYPE html>
<html>
<head>
	<title>Sukses Login</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
	<a href="<?php echo base_url('Welcome'); ?>">Back to website</a>
</body>
</html>