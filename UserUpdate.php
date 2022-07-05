<?php
    $userEmail = $_REQUEST['userEmail'];
    $username = $_REQUEST['username'];

    $file = fopen('./UserData.txt', 'r');

    while (!feof($file)) {
        $data = fgets($file);
        $user = explode("|", $data);
        if ($userEmail == trim($user[7])) {
            $username = trim($user[0]);
            $userFather = trim($user[1]);
            $userMother = trim($user[2]);
            $dob = trim($user[3]);
            $gender = trim($user[4]);
            $bloodType = trim($user[5]);
            $accType = trim($user[6]);
            break;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h2>Edit your Information</h2>
    <br>
    <form action="UserUpdate.php" method="post">
        <table border="1">
            <tr>
                <th colspan="2">Personal Profile</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="username" value="<?php echo $userName; ?>"></td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td><input type="text" name="userFatherName" value="<?php echo $userFatherName; ?>"></td>
            </tr>
            <tr>
                <td>Mother's Name</td>
                <td><input type="text" name="userMotherName" value="<?php echo $userMotherName; ?>"></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="text" name="dob" value="<?php echo $dateOfBirth; ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="userGender" value="<?php echo $userGender; ?>"></td>
            </tr>
            <tr>
                <td>Blood Type</td>
                <td><input type="text" name="userBloodType" value="<?php echo $userBloodType; ?>"></td>
            </tr>
            <tr>
                <td>Account Type</td>
                <td><input type="text" name="accountType" value="<?php echo $accountType; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="userEmail" value="<?php echo $userEmail; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="userPassword" value="<?php echo $userName; ?>"></td>
            </tr>
        </table>
        <h5>Are you sure you want to update your information?</h5>
        <input type="submit" name="submit" value="Update" >
		<input type="submit" name="cancel" value="Cancel" >
    </form>
<?php
    if (isset($_POST['submit'])) {
        $username = $_REQUEST['username'];
        $userFatherName = $_REQUEST['userFatherName'];
        $userMotherName = $_REQUEST['userMotherName'];
        $dateOfBirth = $_REQUEST['dob'];
        $userGender = $_REQUEST['userGender'];
        $userBloodType = $_REQUEST['userBloodType'];
        $accountType = $_REQUEST['accountType'];
        $userEmail = $_REQUEST['userEmail'];
        $userPassword = $_REQUEST['userPassword'];

        $user = $username."|".$userFatherName."|".$userMotherName."|".$dateOfBirth."|".$userGender."|".$userBloodType."|".$accountType."|".$userEmail."|".$userPassword."\r\n";
        $file = fopen('UserData.txt','w+');
        fwrite($file, $user);
        header('location: UserPage.php');
    }elseif (isset($_POST['cancel'])) {
        header('location: LoginPage.html');
    }
?>
</body>
</html>
