<?php
    session_start();
	require_once "../model/adminModel.php";

    $adminName = $_POST['adminName'];
    $adminEmail = $_POST['adminEmail'];
    $adminId = $_POST['adminId'];
    $adminPassword = $_POST['adminPassword'];

    $adminIdInt = intval($adminId);

    if($adminName == null || $adminEmail == null || $adminIdInt == null || $adminPassword == null){
		echo "null username/email/password";
	}else{
		$status = adminLogin($adminName, $adminEmail, $adminIdInt, $adminPassword);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/AdminPage.php');
		}else{
			alret("invalid user");
		}
	}
?>