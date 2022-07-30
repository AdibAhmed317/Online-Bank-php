<?php
    require_once "db.php";

    function login($username, $userEmail,$userPassword){
        $conn = getConnection();
		$sql = "select * from user where name='{$username} 'and email='{$userEmail}' and password='{$userPassword}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

    function Registration($username, $userPhone, $userEmail, $userNid, $dateOfBirth, $userPermanentAdd, $userTemporaryAdd, $userAreaCode, $userPassword, $userConfirmPassword, $userGender, $accountType){
        $conn = getConnection();
        $sql = "INSERT INTO `users`(`Name`, `FatherName`, `MotherName`, `dob`, `Gender`, `BloodType`, `accType`, `Email`, `Phone`, `Password`) VALUES ('{$username}','{$userFatherName}','{$userMotherName}','{$dateOfBirth}','{$userGender}','{$userBloodType}','{$accountType}','{$userEmail}','{$userPhone}','{$userPassword}')";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }
?>