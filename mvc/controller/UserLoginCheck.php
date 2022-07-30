<?php
    session_start();

	require_once "../model/userModel.php";

    $username = $_POST['loginUserName'];
    $userEmail = $_POST['loginUserEmail'];
    $userPassword = $_POST['loginUserPassword'];

    if($username == null || $userEmail == null || $userPassword == null){
		echo "null username/email/password";
	}else{
		$status = login($username, $userEmail, $userPassword);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/UserPage.php');
		}else{
			echo "invalid user";
		}
	}
?> 