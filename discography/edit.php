<?php include_once 'lock.php'; include_once 'func.php';
include_once 'DAO.php'; 

if(empty($_GET['id_btsz'])) 
{
	header('location:index.php?msg=idinvalid');
}
else
{
	$id_btsz = $_GET['id_btsz'];

	$func = select_func($id_btsz);

	if(empty($func))
	{
		header('location:index.php?msg=errorselect');
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>방탄소년단- Edit</title>
</head>
<body class="container-fluid">

	<h1>방탄소년단 - Edit</h1>

	<p><?php include_once 'menu.php';?></p>

	<h3>Edit Album:</h3>

	<form action="edit.php" method="post">
		<p>
			<label>Album Name:</label><br>
			<input type="text" name="album" maxlength="50" 
			value="<?php echo $func['album']; ?>"  placeholder="Ex: Xxxxx Xxxxx">
		</p>
		
		<p>
			<label>Release Date:</label><br>
			<input type="text" name="datere" maxlength="10" 
			value="<?php echo $func['datere']; ?>" placeholder="Ex: dd-mm-yyyy">
		</p>
		<p>
			<label>Track List:</label><br>
			<textarea id="track" name="track" rows="4" cols="50" value="<?php echo $func['track']; ?>" placeholder="Ex: 1 xxxxx || 2 xxxxx"></textarea>
		</p>

		<input type="hidden" name="id_btsz" value="<?php echo $func['id_btsz']; ?>">

		<button type="submit" name="edit" class="btn btn-dark">Submit</button>
	</form>
	

	<?php  
		echo '<td>
					<a>
						<img src="IMG/bts.png" width="1880px" heigh="500px"> 
					</a>
				  </td>';

	if(isset($_POST['edit']))
	{
		if(empty($_POST['album']) || empty($_POST['datere']) || empty($_POST['track']))
		{
			header('location:index.php?msg=erroselect');
		}
		else
		{
			$func['album']    = $_POST['album'];
			$func['datere']   = $_POST['datere'];
			$func['track']   = $_POST['track'];
			$func['id_btsz'] = $_POST['id_btsz'];

			edit($func);
		}
	}
	?>

</body>
</html>