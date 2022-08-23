<?php
    require_once "db.php";

    function login($accNumber, $userPassword){
        $conn = getConnection();
		$sql = "select * from users where Account_Number='{$accNumber}' and Password='{$userPassword}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

    function Registration($username, $userPhone, $userEmail, $userNid, $dateOfBirth, $userPermanentAdd, $userTemporaryAdd, $userAreaCode, $userPassword, $userConfirmPassword, $userGender, $accountType, $accountNumb, $imageName){
        $conn = getConnection();
        $sql = "INSERT INTO `users`(`Name`, `Phone`, `Email`, `NID`, `dob`, `Permanent_Add`, `Temporary_Add`, `Area_Code`, `Password`, `Gender`, `Account_Type`, `Account_Number`, `Picture`) VALUES ('{$username}','{$userPhone}','{$userEmail}','{$userNid}','{$dateOfBirth}','{$userPermanentAdd}','{$userTemporaryAdd}','{$userAreaCode}','{$userPassword}','{$userGender}','{$accountType}', '{$accountNumb}', '{$imageName}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
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
                    "Picture" => $row['Picture'],
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
		$result = mysqli_query($conn, $sql);

        if ($result) {
            $conn = getConnection();
            $sql = "INSERT INTO `transactions`(`Account_Number`, `Transaction_Type`, `Amount`, `Receiver`) VALUES ('{$senderAccNumb}','Diposit', '{$creditAmountInt}', '{$senderAccNumb}')";
            $result = mysqli_query($conn, $sql);
            return true;
        } else {
            return false;
        }
    }

    function sendMoney($senderAccNumb,$receiverAccNumb,$userPassword,$creditAmountInt)
    {
        $conn = getConnection();
		$sql = "
        update `users` set `Balance`=Balance - {$creditAmountInt} WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$userPassword}';
        ";
		$result1 = mysqli_query($conn, $sql);

        $conn2 = getConnection();
		$sql2 = "
        update `users` set `Balance`=Balance + {$creditAmountInt} WHERE `Account_Number`='{$receiverAccNumb}';
        ";
		$result2 = mysqli_query($conn2, $sql2);

        if ($result1 && $result2) {
            $conn = getConnection();
            $sql = "INSERT INTO `transactions`(`Account_Number`, `Transaction_Type`, `Amount`, `Receiver`) VALUES ('{$senderAccNumb}','Send Money', '{$creditAmountInt}', '{$receiverAccNumb}')";
            $result = mysqli_query($conn, $sql);
            return true;
        } else {
            return false;
        }
    }

    function withdraw ($senderAccNumb,$creditAmountInt,$userPassword){
        $conn = getConnection();
		$sql = "
        update `users` set `Balance`=Balance - {$creditAmountInt} WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$userPassword}';
        ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $conn = getConnection();
            $sql = "INSERT INTO `transactions`(`Account_Number`, `Transaction_Type`, `Amount`, `Receiver`) VALUES ('{$senderAccNumb}','Withdraw', '{$creditAmountInt}', '{$senderAccNumb}')";
            $result = mysqli_query($conn, $sql);
            return true;
        } else {
            return false;
        }
    }

    function passwordChange($senderAccNumb,$currentPW,$newPW)
    {
        $conn = getConnection();
		$sql = "
        update `users` set `Password`='{$newPW}' WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$currentPW}';
        ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function deleteAccount($senderAccNumb,$userPassword)
    {
        $conn = getConnection();
		$sql = "
        DELETE FROM `users` WHERE `Account_Number`='{$senderAccNumb}' and `Password`='{$userPassword}';
        ";
        mysqli_query($conn, $sql);
    }

    function fetchTransactionDetails($accNumber)
    {
        $conn = getConnection();
		
        $sql = "SELECT * FROM `transactions` WHERE `Account_Number`='{$accNumber}';";
        $result = mysqli_query($conn, $sql);

        return $result;
    }

    function customerList($Fsearch)
    {
        $conn = getconnection();
        $sql = "select * from users where Name='{$Fsearch}'";
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
?>