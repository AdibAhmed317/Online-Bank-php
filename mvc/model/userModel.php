<?php
    require_once "db.php";

    function login($username, $userEmail, $accNumber, $userPassword){
        $conn = getConnection();
		$sql = "select * from users where Name='{$username} 'and Email='{$userEmail}' and Account_Number='{$accNumber}' and Password='{$userPassword}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

    function Registration($username, $userPhone, $userEmail, $userNid, $dateOfBirth, $userPermanentAdd, $userTemporaryAdd, $userAreaCode, $userPassword, $userConfirmPassword, $userGender, $accountType, $accountNumb){
        $conn = getConnection();
        $sql = "INSERT INTO `users`(`Name`, `Phone`, `Email`, `NID`, `dob`, `Permanent_Add`, `Temporary_Add`, `Area_Code`, `Password`, `Gender`, `Account_Type`, `Account_Number`) VALUES ('{$username}','{$userPhone}','{$userEmail}','{$userNid}','{$dateOfBirth}','{$userPermanentAdd}','{$userTemporaryAdd}','{$userAreaCode}','{$userPassword}','{$userGender}','{$accountType}', '{$accountNumb}')";
        mysqli_query($conn, $sql);
    }

    function getPersonalData()
    {
        $conn = getConnection();
    }
?>


        <!-- $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    } -->