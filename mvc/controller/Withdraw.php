<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $withdrawAmount = $_POST['withdrawAmount'];
    $userPassword = $_POST['userPassword'];

    $creditAmountInt = intval($withdrawAmount);

    $status = withdraw($senderAccNumb,$creditAmountInt,$userPassword);
    if($status){
		$_SESSION['status'] = true;
		setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/UserPage.php?accNumber='.$senderAccNumb);
	}else{
		echo require_once "../view/LoginError.html";
	}
?>