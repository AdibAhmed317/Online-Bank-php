<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $currentPW = $_POST['currentPW'];
    $newPW = $_POST['newPW'];

    $status = passwordChange($senderAccNumb,$currentPW,$newPW);
    if($status){
		$_SESSION['status'] = true;
		setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/UserPage.php?accNumber='.$senderAccNumb);
	}else{
		echo require_once "../view/LoginError.html";
	}
?>