<?php
    session_start();
	require_once "../model/userModel.php";

    $senderAccNumb = $_POST['senderAccNumb'];
    $currentPW = $_POST['currentPW'];
    $newPW = $_POST['newPW'];

    passwordChange($senderAccNumb,$currentPW,$newPW);
    header('location: ../view/UserLoginPage.html');
?>