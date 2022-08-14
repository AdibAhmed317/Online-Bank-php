<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $receiverAccNumb = $_POST['receiverAccNumb'];
    $userPassword = $_POST['userPassword'];
    $sendAmount = $_POST['creditAmount'];

    $creditAmountInt = intval($sendAmount);

    sendMoney($senderAccNumb,$receiverAccNumb,$userPassword,$creditAmountInt);
?>