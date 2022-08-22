<?php
  session_start();
  $accNumber = $_REQUEST['accNumber'];

	require_once "../model/userModel.php";

  echo $accNumber;

  $result = fetchTransactionDetails($accNumber);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  
</head>
<body>
  <div>
    <form method="POST" action="">
        <input type="text" id="search" name="" value="" placeholder = "Search by Type">
        <input type="button" id="click" name="submit" value="Search" onclick="Search()"> 
		<h3></h3>
		<h1></h1>
    </form>
    <table>
        <thead>
            <th>Account No.</th>
            <th>Type</th>
            <th>Amount</th>
        </thead>
        <tbody>
            <?php 
            

            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td><?php echo $row["Account_Number"]; ?></td>
                    <td><?php echo $row["Transaction_Type"]; ?></td>
                    <td><?php echo $row["Amount"]; ?></td>
                  </tr>
                  <?php
                  }
                }
                    ?>
        </tbody>
    </table>
</div>
</body>
</html>
