<?php
  session_start();
  
  $accNumber = $_REQUEST['accNumber'];

?>
<html lang="en">
  <head>
    <title>Profile</title>
  </head>
  <body>
    <div>
      <h1>Welcome <?=$accNumber?>
      <h3>Personal Profile</h3>
    </div>
  </body>
</html>
