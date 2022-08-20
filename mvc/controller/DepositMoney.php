<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $depositAmount = $_POST['depositAmount'];
    $userPassword = $_POST['userPassword'];
    $creditAmountInt = intval($depositAmount);

    $status = depositMoney($senderAccNumb,$creditAmountInt,$userPassword);
    if($status){
		$_SESSION['status'] = true;
		setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/UserPage.php?accNumber='.$senderAccNumb);
	}else{
		echo require_once "../view/LoginError.html";
	}
?>