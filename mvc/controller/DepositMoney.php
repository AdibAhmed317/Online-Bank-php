<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $depositAmount = $_POST['depositAmount'];
    $userPassword = $_POST['userPassword'];
    $creditAmountInt = intval($depositAmount);

    depositMoney($senderAccNumb,$creditAmountInt,$userPassword);
    header('location: ../view/UserLoginPage.html');
?>