<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $receiverAccNumb = $_POST['receiverAccNumb'];
    $userPassword = $_POST['userPassword'];
    $sendAmount = $_POST['creditAmount'];

    $creditAmountInt = intval($sendAmount);

    $status = sendMoney($senderAccNumb,$receiverAccNumb,$userPassword,$creditAmountInt);
    if($status){
		$_SESSION['status'] = true;
		setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/UserPage.php?accNumber='.$senderAccNumb);
	}else{
		echo require_once "../view/LoginError.html";
	}
?>