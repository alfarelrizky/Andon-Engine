<?php
	session_start();
	include "koneksi.php";
	$no 		= $_POST['number'];
	$engineno 	= $_POST['engine_no'];
	$type 		= $_POST['Type'];
	$plan		= $_POST['plan_production'];
	$status		= $_POST['status'];

	echo $no;
	echo $engineno;
	echo $type;
	echo $plan;
	echo $status;
	$query = mysqli_query($koneksi,"UPDATE `engine_number` set no = '".$no."' , engine_no = '".$engineno."' , type='".$type."' , plan_production='".$plan."' , status='".$status."'  where no = '".$no."'");
		if ($query == TRUE) 
		{
			$_SESSION['peringatan'] = "sukses";
			header('location:admin.php');
		}                    
		else
		{
			$_SESSION['peringatan'] = "gagal";
			header('location:admin.php');
		}	
?>