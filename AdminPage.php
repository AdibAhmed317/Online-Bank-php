<?php
  session_start();
?>
<html>
  <head>
    <title>Dashboard</title>
  </head>
  <body>
    <nav>
      <h1><a href="HomePage.html">Online Bank</a></h1>
    </nav><hr>
    <h1>Welcome Admin</h1>
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
    <hr />
    <fieldset>
      <legend><h3>Add new Customer</h3></legend>
      <form method='post' action='./UserRegCheck.php'>
      Name <input type="text" name="username" value="" /><br />
        Father's Name
        <input type="text" name="userFatherName" value="" /><br />
        Mother's Name
        <input type="text" name="userMotherName" value="" /><br />
        Date of Birth
        <input type="date" name="dob" value="" /><br />
        Gender
        <select name="userGender">
          <option value="none">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <br />
        Blood Group
        <select name="userBloodType">
          <option value="none"></option>
          <option value="A_Positive">A Positive</option>
          <option value="A_Negative">A Negative</option>
          <option value="B_Positive">B Positive</option>
          <option value="B_Negative">B Negative</option>
          <option value="AB_Positive">AB Positive</option>
          <option value="AB_Negative">AB Negative</option>
          <option value="O_Positive">O Positive</option>
          <option value="O_Negative">O Negative</option>
      </select>
      <br />
        Account type
        <select name="accountType">
          <option value="none">Select</option>
          <option value="Current_Accoutnt">Current Account</option>
          <option value="Saving_Account">Saving Account</option>
          <option value="Fixed_Deposit_Account">Fixed deposit Account</option>
        </select>
        <br />
        Email <input type="text" name="userEmail" value="" /><br />
        Password <input type="password" name="userPassword" value="" /><br />
        Confirm Password
        <input type="password" name="userConfirmPassword" value="" /><br />
        Phone 
        <input type="text" name="userTel" value="">
        <br />
        <input type="submit" name="submit" value="Submit" />
      </form>
    </fieldset>
    <hr />
    <a href="logout.php"> logout </a>
  </body>
</html>
