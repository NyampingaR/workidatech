<?php
include'connection.php';


    $a=$_POST['id'];
    $b=$_POST['name'];
    $c=$_POST['age'];
    $d=$_POST['sex'];

    $sql="INSERT INTO student VALUES ('$a','$b','$c','$d')";
    $a=mysqli_query($conn,$sql);
    header("location:student_form.php");

?>