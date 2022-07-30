<?php
    session_start();
    require_once "../model/userModel.php";

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
    $userPhone = $_POST['userPhone'];

    if ($username == null || $userFatherName == null || $userMotherName == null || $dateOfBirth == null || $userGender == null || $userBloodType == null || $accountType == null || $userEmail == null || $userPassword == null || $userConfirmPassword == null || $userPhone == null) {
        echo "Invalid Input!";
    }elseif ($userPassword != $userConfirmPassword) {
        echo "Password did not match.";
    }else {

        $status = Registration($username, $userFatherName, $userMotherName, $dateOfBirth, $userGender, $userBloodType, $accountType, $userEmail, $userPhone, $userPassword);

        
		if($status){
            $_SESSION['status'] = true;
            setcookie('status', 'true', time()+3600, '/');
            header('location: ../../LoginPage.html');
        }
    }
?>

