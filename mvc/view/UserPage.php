<?php
  session_start();

  if (!isset($_SESSION['status'])) {
    header('location: ../view/LoginPage.html');
  }

  $accNumber = $_REQUEST['accNumber'];

	require_once "../model/userModel.php";

  $data = getPersonalData($accNumber);
?>
<html lang="en">
  <head>
    <title>Profile</title>
    <link rel="stylesheet" href="../assest/css/UserPage.css" />
  </head>
  <body>
    <div class="container">
    <nav class="navbar">
        <div class="title">
          <h1>Welcome, <?php echo $data["Name"] ?></h1>
        </div>
        <div class="pages">
          <ul>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#deposit">Deposit</a></li>
            <li><a href="#sendMoney">Send Money</a></li>
            <li><a href="#applyLoan">Withdraw Money</a></li>
            <li><a href="#passwordChange">Update Password</a></li>
            <li><a href="./history_transaction.php?accNumber=<?php echo $accNumber;?>">History</a></li>
            <li><a href="#deleteAccount">Delete Account</a></li>
          </ul>
        </div>
        <div class="auth">
          <a id="sign-up" href="../controller/logout.php">Logout</a>
        </div>
      </nav>
      <div id="profile" class="profile">
        <table id="profile-table" class="profile-table" border='1'>
          <h1 id='profile-heading'>Profile</h1>
          <img src="../controller/uploads/<?php echo $data["Picture"] ?>" style='width:150px;height:150px;margin-bottom:2px'>
              <tr>
                <td>Name:</td>
                <td><?php echo $data["Name"] ?></td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td><?php echo $data["Phone"] ?></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><?php echo $data["Email"] ?></td>
              </tr>
              <tr>
                <td>NID:</td>
                <td><?php echo $data["NID"] ?></td>
              </tr>
              <tr>
                <td>Date of Birth:</td>
                <td><?php echo $data["dob"] ?></td>
              </tr>
              <tr>
                <td>Permanent Address:</td>
                <td><?php echo $data["Permanent_Add"] ?></td>
              </tr>
              <tr>
                <td>Temporary Address:</td>
                <td><?php echo $data["Temporary_Add"] ?></td>
              </tr>
              <tr>
                <td>Area Code:</td>
                <td><?php echo $data["Area_Code"] ?></td>
              </tr>
              <tr>
                <td>Gender:</td>
                <td><?php echo $data["Gender"] ?></td>
              </tr>
              <tr>
                <td>Account Type:</td>
                <td><?php echo $data["Account_Type"] ?></td>
              </tr>
              <tr>
                <td>Account Number</td>
                <td><?php echo $data["Account_Number"] ?></td>
              </tr>
              <tr>
                <td>Balance</td>
                <td>$<?php echo $data["Balance"] ?></td>
              </tr>
          </table>
      </div>
      <div id="deposit" class="send-money">
        <form class="form"  method="post" action="../controller/DepositMoney.php">
          <h1>Deposit Money</h1>
          <input type="text" name="senderAccNumb" value="" placeholder="Enter Your Account Number">
          <input type="text" name="depositAmount" value="" placeholder="Enter amount">
          <input type="password" name="userPassword" value="" placeholder="Enter your password">
          <button id="submit" type="submit" name="submit" value="Submit" />Deposit</button>
        </form>
      </div>
      <div id="sendMoney" class="send-money">
        <form class="form"  method="post" action="../controller/SendMoney.php">
          <h1>Send Money</h1>
          <input type="text" name="senderAccNumb" value="" placeholder="Enter Your Account Number">
          <input type="text" name="receiverAccNumb" value="" placeholder="Enter receiver Account Number">
          <input type="text" name="creditAmount" value="" placeholder="Enter amount">
          <input type="password" name="userPassword" value="" placeholder="Enter your password">
          <button id="submit" type="submit" name="submit" value="Submit" />Send</button>
        </form>
      </div>
      <div id="applyLoan" class="apply-loan">
      <form class="form"  method="post" action="../controller/Withdraw.php">
          <h1>Withdraw Money</h1>
          <input type="text" name="senderAccNumb" value="" placeholder="Enter Your Account Number">
          <input type="text" name="withdrawAmount" value="" placeholder="Enter withdraw Amount">
          <input type="password" name="userPassword" value="" placeholder="Enter your password">
          <button id="submit" type="submit" name="submit" value="Submit" />Apply</button>
        </form>
      </div>
      <div id="passwordChange" class="password-change">
      <form class="form"  method="post" action="../controller/PasswordChange.php">
          <h1>Password Change</h1>
          <input type="text" name="senderAccNumb" value="" placeholder="Enter your Account Number">
          <input type="password" name="currentPW" value="" placeholder="Enter Current Password">
          <input type="password" name="newPW" value="" placeholder="Enter New Password">
          <button id="submit" type="submit" name="submit" value="Submit" />Change</button>
        </form>
      </div>
      <div id="deleteAccount" class="password-change">
      <form class="form"  method="post" action="../controller/DeleteAccount.php">
          <h1>Account Delete</h1>
          <input type="text" name="senderAccNumb" value="" placeholder="Enter your Account Number">
          <input type="password" name="userPassword" value="" placeholder="Enter Current Password">
          <button id="submit" type="submit" name="submit" value="Submit" />Delete</button>
        </form>
      </div>
    </div>
  </body>
</html>