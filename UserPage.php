<?php
  session_start();
  
  // $username = $_GET['username'];
  // $userEmail = $_GET['userEmail'];

?>
<html lang="en">
  <head>
    <title>Customer</title>
  </head>
  <body>
    <h1>Welcome User</h1><hr />
    <h3>Personal Profile</h3>
    <table>
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
    </table>
    <a href="logout.php"> logout </a>
  </body>
</html>
