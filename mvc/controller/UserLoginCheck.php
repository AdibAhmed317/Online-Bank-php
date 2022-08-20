<?php
    session_start();
	require_once "../model/userModel.php";

    $accNumber = $_POST['userNid'];
    $userPassword = $_POST['userPassword'];

	$status = login($accNumber, $userPassword);

	if($status){
		$_SESSION['status'] = true;
		setcookie('status', 'true', time()+3600, '/');
		header('location: ../view/UserPage.php?accNumber='.$accNumber);
	}else{
		echo require_once "../view/LoginError.html";
	}
?> 
