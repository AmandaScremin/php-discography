<?php  
include_once 'conn.php'; include_once 'func.php';

function registeral($func)
{
	global $conn;

	$values = "('" . $func['album']  . "',  " .
		  	  " '" . $func['datere'] . "', "  .
		  	  " '" . $func['track'] ."')";

	$sql = "INSERT INTO btsz (album, datere, track) VALUES " . $values;

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=regok');
	}
	else
	{
		header('location:index.php?msg=regerror');
	}
}
function registeremp($user)
{
	global $conn;

	$values = "('" . $user['username']  . "',  " .
		  	  " '" . $user['password'] . "', "  .
		  	  " '" . $user['email'] ."')";

	$sql = "INSERT INTO employees (name, password, email) VALUES " . $values;

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:login.php?msg=reguserok');
	}
	else
	{
		header('location:login.php?msg=regusererror');
	}
}
function delete($id_btsz)
{
	global $conn;

	$sql = "DELETE FROM btsz WHERE id_btsz = $id_btsz";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=delok');
	}
	else
	{
		header('location:index.php?msg=delerror');
	}
}

function select_func($id_btsz)
{
	global $conn;

	$sql = "SELECT * FROM btsz WHERE id_btsz = $id_btsz";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$func = mysqli_fetch_assoc($result);
		return $func;
	}

	return '';
}

function edit($func)
{
	global $conn;

	$values = "album  = '" .$func['album'] ."', " .
			  "datere = '" .$func['datere']."', " .
			  "track = '" .$func['track']."'";

	$sql = "UPDATE btsz SET $values WHERE id_btsz = " . $func['id_btsz'];

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=edtok');
	}
	else
	{
		header('location:index.php?msg=edterror');
	}
}

function albums_registered()
{
	global $conn;

	$sql = "SELECT * FROM btsz";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{

		echo "<h2>Registered Albums</h2>";

		echo '<table class="table table-hover table-dark">';
		echo '<tr>';
		echo '<th>ID</th>';
		echo '<th>Name</th>';
		echo '<th>Release Date</th>';
		echo '<th>Track List</th>';
		echo '<th colspan="2">Ações</th>';
		echo '</tr>';
		while ($registro = mysqli_fetch_assoc($result)) 
		{
			echo '<tr>';
			foreach ($registro as $key => $value) 
			{
				if($key == 'id_btsz') { $id_btsz = $value; }

				echo '<td>'. $value . '</td>';
			}
			echo '<td>
					<a href="edit.php?id_btsz='.$id_btsz.'" class="btn btn-info">
						<img src="IMG/pencil.png" width="15px" height="15px"> Edit
					</a>
				  </td>';

			echo '<td>
					<a href="delete.php?id_btsz='.$id_btsz.'" class="btn btn-light" 
					onclick="return confirm(\'Are you sure that you wanna exclude it?\')">
						<img src="IMG/trash.png" width="15px" heigh="15px"> Delete 
					</a>
				  </td>';

			echo '</tr>';
		}
		echo '</table>';

	}
	else
	{
		echo '<h2>We do not have any album registered yet...</h2>';
	}
}

?>