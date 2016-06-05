<?php
$to="hk131997@gmail.com";
$subject="manan query";
$msg=$_POST['msg'];
mail($to,$subject,$msg);
header('Location:index.html');
?>

