<?php include 'DAO.php'; include_once 'func.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>방탄소년단 | Albums</title>
</head>
<body class="container-fluid">
	<h1>방탄소년단 | Discography</h1><br>
	<h3>Albums List</h3>

 	<?php 

 	include 'menu.php'; 
 	albums_registered();

 	echo '<td>
					<a>
						<img src="IMG/bts.png" width="1880px" heigh="500px"> 
					</a>
				  </td>';
 	?>
</body>
</html>