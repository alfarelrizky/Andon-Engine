<?php
		$koneksi = mysqli_connect('localhost','root','','andon engine') or die(mysqli_eror);
		if ($koneksi == TRUE)
		{
			$_SESSION['koneksi'] = "TRUE";
		}
		else
		{
			$_SESSION['koneksi'] = "FALSE";
		}
?>