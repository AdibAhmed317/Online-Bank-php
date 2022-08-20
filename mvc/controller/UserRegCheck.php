<?php
    session_start();
    require_once "../model/userModel.php";

    $username = $_POST['username'];
    $userPhone = $_POST['userPhone'];
    $userEmail = $_POST['userEmail'];
    $userNid = $_POST['userNid'];
    $dateOfBirth = $_POST['dob'];
    $userPermanentAdd = $_POST['userPermanentAdd'];
    $userTemporaryAdd = $_POST['userTemporaryAdd'];
    $userAreaCode = $_POST['userAreaCode'];
    $userPassword = $_POST['userPassword'];
    $userConfirmPassword = $_POST['userConfirmPassword'];
    $userGender = $_POST['userGender'];
    $accountType = $_POST['accountType'];
    $accountNumb = $_POST['userNid'];

    $status = Registration($username, $userPhone, $userEmail, $userNid, $dateOfBirth, $userPermanentAdd, $userTemporaryAdd, $userAreaCode, $userPassword, $userConfirmPassword, $userGender, $accountType, $accountNumb);
    if($status){
        $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/LoginPage.html');
    }else{
		echo require_once "../view/RegError.html";
    }
?>
