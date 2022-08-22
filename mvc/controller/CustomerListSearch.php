<?php 

	require_once "../model/userModel.php";
	
	$json =$_POST['data'];
    $jsearch= json_decode($json);
	
	$Fsearch= $jsearch->search;
	
	$data = customerList($Fsearch);
	
	$usernameSearch = $data['Name'];

    $username = $data['Name'];
    $userPhone = $data['Phone'];
    $userEmail = $data['Email'];
    $userNid = $data['NID'];
    $dateOfBirth = $data['dob'];
    $userPermanentAdd = $data['Permanent_Add'];
    $userTemporaryAdd = $data['Temporary_Add'];
    $userAreaCode = $data['Area_Code'];
    $userGender = $data['Gender'];
    $accountType = $data['Account_Type'];
    $accountNumb = $data['Account_Number'];
    $balance = $data['Balance'];

    if($Fsearch == $usernameSearch)
	{
		echo "<table border=1>
			<tr>
				<td>Name</td>
				<td>Phone</td>
				<td>Email</td>
				<td>NID</td>
				<td>Date of birth</td>
				<td>Permanent Address</td>
				<td>Temporary Address</td>
				<td>Area_Code</td>
				<td>Gender</td>
				<td>Account Type</td>
				<td>Account Number</td>
				<td>Balance</td>
			</tr>
			<tr>
				<td>$username</td>
				<td>$userPhone</td>
				<td>$userEmail</td>
				<td>$userNid</td>
				<td>$dateOfBirth</td>
				<td>$userPermanentAdd</td>
				<td>$userTemporaryAdd</td>
				<td>$userAreaCode</td>
				<td>$userGender</td>
				<td>$accountType</td>
				<td>$accountNumb</td>
				<td>$balance</td>
            </tr>";
                
            }
            
?>
            <!-- <td><img src=$pic style='width:100px;height:100px';</td> -->