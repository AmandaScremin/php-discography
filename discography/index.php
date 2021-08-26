<?php include_once 'lock.php'; include_once 'DAO.php'; include_once 'func.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>방탄소년단 | Register | Album</title>
</head>
<body class="container-fluid">
	

	<?php include_once 'menu.php'; include_once 'func.php';?>
	<h1>방탄소년단 | Discography Register</h1><br>
	<h3>Register New Album</h3>
	<h4>Bem-vindo!</h4>
	<form action="index.php" method="post">
		
		<p>
			<label>Album Name:</label><br>
			<input type="text" name="album" maxlength="50" placeholder="Ex: Xxxxx Xxxxx">
		</p>

		<p>
			<label>Release Date:</label><br>
			<input type="text" name="datere" maxlength="10" placeholder="Ex: dd-mm-yyyy">
		</p>

		<p>
			<label>Track List:</label><br>
			<textarea id="track" name="track" rows="4" cols="50" placeholder="Ex: 1 xxxxx || 2 xxxxx"></textarea>
		</p>

		<p>
			<button type="submit" name="submital" class="btn btn-dark">Submit</button> 
		</p>

	</form>

	<?php 	
	messages();

	if(isset($_POST['submital']))
	{
		if(empty($_POST['album']) || empty($_POST['datere']) || empty($_POST['track']))
		{
			echo '<h3 class="alert alert-danger">Please fill in all the fields!</h3>';
		}
		else
		{
			$func['album']  = $_POST['album'];
			$func['datere'] = $_POST['datere'];
			$func['track'] = $_POST['track'];

			registeral($func);
		}
	}
	echo '<td>
					<a>
						<img src="IMG/bts.png" width="1880px" heigh="500px"> 
					</a>
				  </td>';

	
	?>

</body>
</html>