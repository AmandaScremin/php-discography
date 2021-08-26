<?php include_once 'DAO.php'; include_once 'func.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>방탄소년단 | Join Us</title>
</head>
<body class="container-fluid">

	<h1>방탄소년단 | Join Us</h1>
	<h3>Register Session</h3>

	<p><?php include_once 'menubeg.php'; ?></p>

	<h3>Novo Funcionário:</h3>

	<form action="registeremp.php" method="post">
		<p>
			<label>Username:</label><br>
			<input type="text" name="username" maxlength="100">
		</p>
		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" maxlength="50">
		</p>
		<p>
			<label>Password:</label><br>
			<input type="password" name="password" maxlength="100">
		</p>

		<button type="submit" name="submitemp" class="btn btn-dark">Submit</button>
	</form>

<?php  

	if(isset($_POST['submitemp']))
	{
		if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']))
		{
			echo '<h3 class="alert alert-danger">Atenção: preencha todos os campos!</h3>';
		}
		else
		{
			$user['name']  = $_POST['username'];
			$user['email'] = $_POST['email'];
			$user['password'] = $_POST['password'];

			registeremp($user);
		}
	}
		echo '<td>
					<a>
						<img src="IMG/bts.png" width="1900px" heigh="500px"> 
					</a>
				  </td>';
	?>

</body>
</html>