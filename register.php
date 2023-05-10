<!DOCTYPE html>
<html>
    <head>
        <title>helloo!</title>
    </head>
    <body>
    <a href="display.php">Account</a><br><br>
    <?php

    require_once("connect.php");
    if(isset($_POST['register'])){
        
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        mysqli_query($packer, "INSERT INTO cruds (id, lastname, firstname, age, email, status) VALUES (NULL,'$lname', '$fname', '$age', '$email', 'Active');");
    }
    ?>
    <form action="" method="post">
        <input type="text" name="lname" placeholder="Last Name" required/>&nbsp;
        <input type="text" name="fname" placeholder="First Name" required/><br><br>
        <label for="age">Age:</label>
        <select name="age">
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
        </select><br><br>
        <input type="text" name="email" placeholder="Email Address" required/><br><br>
        <input type="submit" name="register" value="Register"/>
    </form>
</body>
</html>