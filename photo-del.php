<?php
include("database.php");

$id_cafe 	= (isset($_GET['id_cafe'])) ? trim($_GET['id_cafe']) : '';

$dat	= mysqli_fetch_array(mysqli_query($con, "SELECT `photo` FROM `cafe` WHERE `id_cafe`= '$id_cafe'"));

unlink("upload/" .$dat['photo']);

$rst_d = mysqli_query( $con, "UPDATE `cafe` SET `photo`='' WHERE `id_cafe` = '$id_cafe' " );

print "<script>self.location='a-cafe.php';</script>";
?>
