<?php
    session_start();

    $username = $_POST['username'];
    $userFatherName = $_POST['userFatherName'];
    $userMotherName = $_POST['userMotherName'];
    $dateOfBirth = $_POST['dob'];
    $userGender = $_POST['userGender'];
    $userBloodType = $_POST['userBloodType'];
    $accountType = $_POST['accountType'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $userConfirmPassword = $_POST['userConfirmPassword'];
    $userTel = $_POST['userTel'];

    if ($username == null || $userFatherName == null || $userMotherName == null || $dateOfBirth == null || $userGender == null || $userBloodType == null || $accountType == null || $userEmail == null || $userPassword == null || $userConfirmPassword == null || $userTel = null ) {
        echo "Invalid Input!";
    }elseif($userPassword != $userConfirmPassword) {
        echo "Password did not match.";
    }else {     
        $user = $username."|".$userFatherName."|".$userMotherName."|".$dateOfBirth."|".$userGender."|".$userBloodType."|".$accountType."|".$userEmail."|".$userPassword."\r\n";
        $file = fopen('UserData.txt','a');
        fwrite($file, $user);
        header('location: LoginPage.html');
    }
?>