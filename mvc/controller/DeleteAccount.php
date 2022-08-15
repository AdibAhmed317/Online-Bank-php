<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $userPassword = $_POST['userPassword'];

    deleteAccount($senderAccNumb,$userPassword);
    header('location: ../view/UserLoginPage.html');
?>