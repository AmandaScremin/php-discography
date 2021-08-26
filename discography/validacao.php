<?php include_once 'func.php';
if (empty($_POST['username']) || empty($_POST['password']))
{
	
	header('location:login.php?msg=eptfields');
}
else 
{
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	include_once 'conn.php';
	$sql = "SELECT * FROM employees WHERE name LIKE '$username' AND password LIKE '$password'";


	$result = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn) > 0) 
	{
		$login = mysqli_fetch_assoc($result);

		session_start();

		$_SESSION['id']  = $login['id'];
		$_SESSION['name'] = $login['username'];
		$_SESSION['password'] = $login['password'];

		
		header('location:index.php');
	}
	else 
	{
		header('location:login.php?msg=invalid');
	}

}


?>