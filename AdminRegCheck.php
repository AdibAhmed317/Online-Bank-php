<?php
    session_start();

    $adminId = $_POST['adminId'];
    $adminEmail = $_POST['adminEmail'];
    $adminPassword = $_POST['adminPassword'];

    if ($adminId == null || $adminEmail == null || $adminPassword == null) {
        echo "invalid input!";
    }else {
        $admin = $adminId."|".$adminEmail."|".$adminPassword."\r\n";
        $file = fopen('AdminData.txt', 'a');
        fwrite($file, $admin);
        header('location: AdminPage.php');
    }
?>