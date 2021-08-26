<?php  
if(empty($_GET['id_btsz'])) 
{ 
	header('location:index.php?msg=idinvalid');
} 
else 
{
	$id_btsz = $_GET['id_btsz'];
	include_once 'DAO.php';
	delete($id_btsz);
}
?>