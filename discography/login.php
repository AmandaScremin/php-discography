<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>방탄소년단 | Login</title>
</head>
<body class="container-fluid">
	<h1>방탄소년단 | Login</h1><br>
	<h3>Iniciate Session</h3>
	<?php include_once 'menubeg.php'; include_once 'func.php';?>

	<form action="validacao.php" method="post">
		
		<p>
			<label>User Name:</label><br>
			<input type="text" name="username" maxlength="50" placeholder="Ex: Xxxx">
		</p>

		<p>
			<label>Password:</label><br>
			<input type="password" name="password" maxlength="20">
		</p>

		<p>
			<button type="submit" class="btn btn-dark">Login</button> 
			| <a href="registeremp.php">Join Us</a>
		</p>

	</form>

	<?php 
	messages();

	echo '<td>
					<a>
						<img src="IMG/bts.png" width="1880px" heigh="500px"> 
					</a>
				  </td>'; ?>

</body>
</html>