<?php
	session_start();
	include "koneksi.php";
	// echo $_POST['katasandi-administrator'];
	if ($_POST['katasandi-administrator'] == "")
	{
		header('location:index.php');
	}
	else
	{
		if($_POST['katasandi-administrator'] == "ADM123")
		{
			$_SESSION['key'] = md5(time());
			header('location:admin.php');
		}
		else
		{
			header('location:index.php');
		}
	}
?>