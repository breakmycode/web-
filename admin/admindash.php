<?php
 session_start();
 if(isset($_SESSION['uid']))
 {
     echo "";
 }
else{
    header('location: ../login.php');
}
?>

<html>
<head>
<style>
.admintitle{
    width:100%;
    height:100px;
    color:white;
    background-color:blue;
    line-height:100px;
}



</style>

</head>
<body>
<div class="admintitle" align="center">
<h1 > welcome to admin dashboard </h1>
<h4> <a href="logout.php" style="float:right; margin-right:30px; color:black; font-size:20px"> logout </a> </h4>
</div>

<div class="dashboard">
<table border="1" style="width:20%" align="center">
<tr>
<td> 1. </td> <td> <a href="addstudent.php"> insert student details </a> </td>
</tr>
<tr>
<td> 2. </td> <td> <a href="updatestudent.php"> update student details </a> </td>
</tr>
<tr>
<td> 3. </td> <td> <a href="deletestudent.php"> delete student details </a> </td>
</tr>
</table>
</div>


</body>
</html>