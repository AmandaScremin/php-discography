<?php  include_once 'conn.php';

function messages()
{
	if (!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];
		if ($msg == 'eptfields')
		{
			$texto = "Plase fill in all the fields!";
		}
		else if ($msg == 'invalid') 
		{
			$texto = "User or password invalid. Please try again";
		}
		else if ($msg == 'notlog')
		{
			$texto = "Please fill in the fields so you can access the platform!";
		}
		else if ($msg == 'regdok')
		{
			$texto = "Album registered successfully!";
		}
		else if ($msg == 'regerror')
		{
			$texto = "Error while registering the album. Please try again!";
		}
		else if ($msg == 'reguserok')
		{
			$texto = "User registered successfully! Now you can do your're login!!";
		}
		else if ($msg == 'regusererror')
		{
			$texto = "Error while registering user. Please try again!";
		}
		else if ($msg == 'delok')
		{
			$texto = "Album deleted successfully!";
		}
		else if ($msg == 'delerror')
		{
			$texto = "Error while deleting the album. Please try again!";
		}
		else if ($msg == 'idinvalid')
		{
			$texto = "Ivalid user. Please try again!";
		}
		else if ($msg == 'errorselect')
		{
			$texto = "Error while redirecting to edit page. Please try again!";
		}
		else if ($msg == 'edtok')
		{
			$texto = "Album edited successfully!";
		}
		else if ($msg == 'edterror')
		{
			$texto = "Error while trying to edit album. Please try again!";
		}

		echo '<p><h3 class="alert alert-dark">'.$texto.'<h3></p>';
	}
}

?>

