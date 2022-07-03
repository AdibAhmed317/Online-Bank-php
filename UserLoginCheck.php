<?php
    session_start();

    $username = $_POST['loginUserName'];
    $userEmail = $_POST['loginUserEmail'];
    $userPassword = $_POST['loginUserPassword'];

    if($username == null || $userEmail == null || $userPassword == null){
		echo "null username/email/password";
	}else{
		$file = fopen('UserData.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($username == trim($user[0]) && $userEmail == trim($user[7]) && $userPassword == trim($user[8])){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				$query = array(
					'username' => $username,
					'userEmail' => $userEmail
				);
				header('location: UserPage.php');
			}
		}
		echo "invalid user";
	}
?>