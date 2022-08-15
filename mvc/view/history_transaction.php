<?php
  session_start();
  $accNumber = $_REQUEST['accNumber'];

	require_once "../model/userModel.php";

  /* $data = getPersonalData($accNumber); */

  echo $accNumber;

  $result = fetchTransactionDetails($accNumber);
?>
<table>
    <thead>
        <th>SL</th>
        <th>Account No.</th>
        <th>Type</th>
    </thead>
    <tbody>
        <?php 
         

         if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {
               //`Sl_no``Transaction_Type`
               ?>
               <tr>
                <td><?php echo $row["Sl_no"]; ?></td>
                <td><?php echo $row["Account_Number"]; ?></td>
                <td><?php echo $row["Transaction_Type"]; ?></td>
               </tr>
               <?php
               }
            } 
        
                ?>
    </tbody>
</table>