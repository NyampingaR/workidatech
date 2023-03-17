<!DOCTYPE html>
<html>
<head>
    <title>Ida</title>
</head>
   <style type="text/css">

input{
    width:100%;
    box-sizing:border-box;
    margin: 6px 0px;
    padding: 5px;
}
.input{
    width:100%;
    box-sizing:border-box;
    margin: 6px 0px;
    padding: 5px;
}
form {
    width: 25%;
    background: #f3f3f3;
    padding: 40px 30px;
    position: relative;
    top: 70%;
    left: 50%;
    transform: translate(-50%,3%);
    border-radius:10px;
}
input[type=submit]{
    background:blue;
    border-color:blue;
    font-size:18px;
    color:white;
    font-weight:bold;
}
</style>
<body>
<form method="post" action="insert.php">
    <h2>Add student</h2>
    <label>Id</label>
    <input type="text" name="id">
    <label>student_Name</label>
    <input type="text" name="name">
    <label>Age</label>
    <input type="text" name="age">
    <label>sex</label>
    <input type="text" name="sex">

    <input type="submit" value="Insert user">
</form>
</body>
</html>
