<?php
$conn=mysqli_connect("localhost","root","","idatech");
$a=$_POST['id'];
$sql="delete from user where id='$a'";
$a=mysqli_query($conn,$sql);
header ("location:delete_form.php");
?>