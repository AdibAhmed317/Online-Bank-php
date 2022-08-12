<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb']
    $receiverAccNumb = $_POST['receiverAccNumb'];
    $creditAmount = $_POST['creditAmount'];

    // sendMoney($senderAccNumb,$receiverAccNumb,$creditAmount);
?>