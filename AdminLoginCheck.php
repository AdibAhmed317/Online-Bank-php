<?php
    session_start();

    $userId = $_POST['userId'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    
    if ($userId == null || $userEmail == null || $userPassword == null) {
        echo "null username/email/password";
    }else {
        $file = fopen('AdminData.txt', 'r');

        while(!feof($file)) {
            $data = fgets($file);
            $user = explode('|', $data);
            if ($userId == trim($user[0]) && $userEmail == trim($user[1]) && $userPassword == trim($user[2])) {
                $_SESSION['status'] = true;
                setcookie('status','true',time()+3600, '/');
                header('location: AdminPage.php');
            }
        }
        echo "invalid user";
    }
?>