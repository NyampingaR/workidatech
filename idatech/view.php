<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h1>view</h1>
    <table border="1">
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
        <th>Location</th>
        <th>Action</th>
<?php
$conn=mysqli_connect("localhost","root","","idatech");

$sql="SELECT * FROM user";
$a=mysqli_query($conn,$sql);
while($tax=$a->fetch_assoc()){
    ?>
    <tr>
      <td><?php echo $tax['id'];?></td>
      <td><?php echo $tax['name'];?></td>
      <td><?php echo $tax['password'];?></td>
      <td><?php echo $tax['location'];?></td>
    </tr>
    <?php } ?>
    </table>
</center>
</body>
</html>