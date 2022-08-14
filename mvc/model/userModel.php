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

    function getPersonalData($accNumber)
    {
        $conn = getconnection();
        $sql = "select * from users where Account_Number='{$accNumber}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
    
        if($count > 0){
            while($row = mysqli_fetch_assoc($result)){
                $args = array(
                    "Name" => $row['Name'],
                    "Phone" => $row['Phone'],
                    "Email" => $row['Email'],
                    "NID" => $row['NID'],
                    "dob" => $row['dob'],
                    "Permanent_Add" => $row['Permanent_Add'],
                    "Temporary_Add" => $row['Temporary_Add'],
                    "Area_Code" => $row['Area_Code'],
                    "Gender" => $row['Gender'],
                    "Account_Type" => $row['Account_Type'],
                    "Account_Number" => $row['Account_Number'],
                    "Balance" => $row['Balance'],
                );
            }
            return $args;
        }else{
            echo 'No Data Found!!!';
        }
    }

    function depositMoney($senderAccNumb,$creditAmountInt,$userPassword)
    {
        $conn = getConnection();
		$sql = "
        update `users` set `Balance`=Balance + {$creditAmountInt} WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$userPassword}';
        ";
		mysqli_query($conn, $sql);
    }

    function sendMoney($senderAccNumb,$receiverAccNumb,$userPassword,$creditAmountInt)
    {
        $conn = getConnection();
		$sql = "
        update `users` set `Balance`=Balance - {$creditAmountInt} WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$userPassword}';
        ";
		mysqli_query($conn, $sql);

        $conn2 = getConnection();
		$sql2 = "
        update `users` set `Balance`=Balance + {$creditAmountInt} WHERE `Account_Number`='{$receiverAccNumb}';
        ";
		mysqli_query($conn2, $sql2);
    }

    function withdraw ($senderAccNumb,$creditAmountInt,$userPassword){
        $conn = getConnection();
		$sql = "
        update `users` set `Balance`=Balance - {$creditAmountInt} WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$userPassword}';
        ";
        mysqli_query($conn, $sql);
    }

    function passwordChange($senderAccNumb,$currentPW,$newPW)
    {
        $conn = getConnection();
		$sql = "
        update `users` set `Password`='{$newPW}' WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$currentPW}';
        ";
        mysqli_query($conn, $sql);
    }

    function deleteAccount($senderAccNumb,$userPassword)
    {
        $conn = getConnection();
		$sql = "
        DELETE FROM `users` WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$userPassword}';
        ";
        mysqli_query($conn, $sql);
    }
?>