<?php
  session_start();
  
  $userEmail = $_REQUEST['userEmail'];

?>
<html lang="en">
  <head>
    <title>Customer</title>
  </head>
  <body>
    <nav>
      <h1>
        <a href="HomePage.html">Online Bank</a>
      </h1>
    </nav><hr />
    <h1>Welcome <?=$userEmail?></h1><hr />
    <h3>Personal Profile</h3>
    <table border='1'>
      <tr>
        <td>Name</td>
        <td>Father's Name</td>
        <td>Mother's Name</td>
        <td>Date of Birth</td>
        <td>Gender</td>
        <td>Blood Group</td>
        <td>Account Type</td>
        <td>Email</td>
      </tr>
<?php
  $file = fopen('UserData.txt','r');

  while(!feof($file)){
    $data = fgets($file);
    $user = explode("|",$data);
    if ($userEmail == trim($user[7])) {
      $username = trim($user[0]);
      $userFather = trim($user[1]);
      $userMother = trim($user[2]);
      $dob = trim($user[3]);
      $gender = trim($user[4]);
      $bloodType = trim($user[5]);
      $accType = trim($user[6]);
    }
  }
?>
    <tr>
      <td><?=$username?></td>
      <td><?=$userFather?></td>
      <td><?=$userMother?></td>
      <td><?=$dob?></td>
      <td><?=$gender?></td>
      <td><?=$bloodType?></td>
      <td><?=$accType?></td>
      <td><?=$userEmail?></td>
    </tr>
    </table>
    <hr />
    <a href="logout.php"> logout </a><br />
    <a href="<?php echo $href = "UserDelete.php?userEmail=$userEmail & username=$username"?>">Delete Account </a><br />
    <a href="<?php echo $href = "UserUpdate.php?userEmail=$userEmail & username=$username"?>">Update Profile</a>
  </body>
</html>
