<?php
	session_start();
	
	require_once "../model/userModel.php";
	
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Customer List | Admin</title>
</head>
<body>
		<h2>Customer List: </h2>
		<form method="POST" action="">
        <input type="text" id="search" name="" value="" placeholder = "Search by Name">
        <input type="button" id="click" name="submit" value="Search" onclick="Search()"> 
		<h3></h3>
		<h1></h1>
        </form>
<?php
    }
?>
		<tr>
			<td>
				<br> </br>
				<a href="../view/Admin.php"> Back </a>
			</td>
		</tr>
		<script>
		function Search(){
            let search = document.getElementById('search').value;
            let jsearch = {'search': search};
            let json = JSON.stringify(jsearch);
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/CustomerListSearch.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('data='+json);

            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementsByTagName('h3')[0].innerHTML = this.responseText;
                }
            } 
        }
		</script>
</body>
</html>