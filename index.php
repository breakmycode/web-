<!DOCTYPE html>
<html>
<head>

    <title>Student Management System </title>

</head>
<body>
<h4> <a href="C:\xaamp\htdocs\project\login.php"> Admin login  </a> </h4>
<center>
<h2> welcome to student management system </h2>
</center>   

<form action="index.php" mathod="post">
<table style="width:50%" align="center" border="1px">
<tr>
<td colspan="2" align="left"> Student Information </td>
</tr>
<tr>
<td>Choose Standerd  </td>
<td>
<select name="std"> 
<option value="1">1st </option> 
<option value="2">2st </option>
<option value="3">3st </option>
<option value="4">4st </option>
<option value="5">5st </option>
<option value="6">6st </option>

</select>
</td>

</tr>
<te>
<td> Enter Roll no </td>
<td> <input type="text" name="rollno" required </td>
</tr>
<tr>
<td colspan="2"> <input type="submit" value="show info" name="submit"> </td>
</tr>

</table>
</form> 

</body>
</html>