<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $withdrawAmount = $_POST['withdrawAmount'];
    $userPassword = $_POST['userPassword'];

    $creditAmountInt = intval($withdrawAmount);

    withdraw($senderAccNumb,$creditAmountInt,$userPassword);
    header('location: ../view/HomePage.html');
?>