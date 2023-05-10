<!DOCTYPE html>
<html>
<head>
    <title>helloo!</title>
</head>

<body>
    <a href="register.php">Submit</a><br><br>
    <table border="1" cellspacing="0">
        <tr>
            <td>ID Number</td>
            <td>Last Name</td>
            <td>First Name</td>
            <td>Age</td>
            <td>Email Address</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
        <?php
        require_once("connect.php");
        $result = mysqli_query($packer, "select * from cruds where status='Active';");
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <a href="update.php?id_num=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="delete.php?id_num=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
