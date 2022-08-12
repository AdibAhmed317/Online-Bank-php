<?php
    session_start();
	require_once "../model/userModel.php";

    $username = $_POST['username'];
    $userEmail = $_POST['userEmail'];
    $accNumber = $_POST['userNid'];
    $userPassword = $_POST['userPassword'];

    if($username == null || $userEmail == null || $accNumber == null || $userPassword == null){
		echo "null username/email/password";
	}else{
		$status = login($username, $userEmail, $accNumber, $userPassword);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/UserPage.php?accNumber='.$accNumber);
		}else{
			echo "invalid user";
		}
	}
?> 
