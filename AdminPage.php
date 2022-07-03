<?php
  session_start();
?>
<html>
  <head>
    <title>Dashboard</title>
  </head>
  <body>
    <h1>Welcome Admin</h1><hr />
    <h3>Customer List:</h3>
    <table border="1">
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
  $file = fopen('UserData.txt', 'r');

  while(!feof($file)){
    $data = fgets($file);
    $user = explode('|', $data);
    
    if ($user[0] != null && $user[1] != null && $user[2] != null && $user[3] != null && $user[4] != null && $user[5] != null && $user[6] != null && $user[7] != null ) {
      
?>
  <tr>
    <td><?=$user[0]?></td>
    <td><?=$user[1]?></td>
    <td><?=$user[2]?></td>
    <td><?=$user[3]?></td>
    <td><?=$user[4]?></td>
    <td><?=$user[5]?></td>
    <td><?=$user[6]?></td>
    <td><?=$user[7]?></td>
  </tr>
<?php
    }
  }
?>
    </table>
    <br />
    <hr />
    <h3>Admin List:</h3>
    <table border='1'>
    <tr>
        <td>Id</td>
        <td>Email</td>
    </tr>
<?php
  $file2 = fopen('AdminData.txt', 'r');

  while(!feof($file2)){
    $data2 = fgets($file2);
    $admin = explode('|', $data2);
    
    if ($admin[0] != null && $admin[1] != null) {
      
?>
  <tr>
    <td><?=$admin[0]?></td>
    <td><?=$admin[1]?></td>
  </tr>
<?php
    }
  }
?>
    </table>
    <hr />
    <fieldset>
      <legend><h3>Add new Admin</h3></legend>
      <form method='post' action='./AdminRegCheck.php'>
        Id
        <input type="text" name="adminId" value=""><br />
        Email
        <input type="text" name="adminEmail" value=""><br />
        Password
        <input type="text" name="adminPassword" value=""><br />
        <input type="submit" name="submit" value="Submit">
      </form>
    </fieldset>
  </body>
</html>
