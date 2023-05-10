
<?php

require_once("connect.php");

$id=$_GET['id_num'];
mysqli_query($packer, "update cruds set status='Inactive' where id='$id';");

echo'<meta http-equiv="refresh" content="0;display.php">';

?>
