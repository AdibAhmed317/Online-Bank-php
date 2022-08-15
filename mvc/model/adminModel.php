<?php
    require_once "db.php";

    function adminLogin($adminName, $adminEmail, $adminIdInt, $adminPassword){
        $conn = getConnection();
		$sql = "
        select * from admin where Name='{$adminName} 'and Email='{$adminEmail}' and Id='{$adminIdInt}' and Password='{$adminPassword}'
        ";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

?>