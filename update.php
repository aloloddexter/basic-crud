<!DOCTYPE html>
<html>
    <head>
        <title>helloo!</title>
    </head>

    <body>
        <a href="display.php">Account</a><br><br>
        <?php

        require_once("connect.php");
        if(isset($_POST['update'])){
        $lname=$_POST['lname'];
        $fname=$_POST['fname'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $id=$_GET['id_num'];
        mysqli_query($packer, "update cruds set lastname='$lname',firstname='$fname', age='$age', email='$email' where id='$id';");

        echo'<meta http-equiv="refresh" content="0;display.php">';
        }
        ?>
    <form action="" method="post">
        <?php
        require_once("connect.php");
        $id=$_GET['id_num'];
        $result= mysqli_query($packer,"select * from cruds where id='$id';");
        $row= mysqli_fetch_array($result);
        ?>
        <input type="text" name="lname" value="<?php echo $row['lastname'];?>" required/>
        <input type="text" name="fname" value="<?php echo $row['firstname'];?>" required/>
        <input type="text" name="age" value="<?php echo $row['age'];?>" required/>
        <input type="text" name="email" value="<?php echo $row['email'];?>" required/>
        <input type="submit" name="update" value="Update"/>

    </form>

    </body>
</html>