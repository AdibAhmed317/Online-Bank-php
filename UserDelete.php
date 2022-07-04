<html>
    <head>
        <title>Delete Profile</title>
    </head>
    <body>
        <?php
            $userEmail = $_REQUEST['userEmail'];
            $username = $_REQUEST['username'];
        ?>
    <form action="Delete.php" method="post">

        <fieldset>
            <legend>Delete</legend>

                <input type="hidden" name="filename" value="UserData.txt">
                <input type="hidden" name="userEmail" value="<?=$userEmail?>">
                <input type="hidden" name="userName" value="<?=$userName?>">
                Account Name : <br>
                <input type="text" name="name" value="<?php echo $username; ?>">
                <br> <br>
                Account Email : <br>
                <input type="text" name="email" value="<?php echo $userEmail; ?>">
                <br>
                <p>Are you sure want to DELETE your account?</p>
                <input type="submit" name="submit" value="Delete" >
                <input type="submit" name="cancel" value="Cancel" >	
        </fieldset>
    
    </form>

            <?php

                if(isset($_POST['submit'])){

                $filename = $_REQUEST['filename'];
                unlink($filename);
                unlink('Files/History.txt');
                unlink('Files/balance.txt');
                header('location: Login.html');

                }elseif(isset($_POST['cancel'])){
                    header('location: Profile.php?accNum='.$accNum);
                }

            ?>
            
    </body>
</html>