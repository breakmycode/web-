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
</div>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">
 <tr>
<td> Roll No </td>
<td> <input type="number" name="rollno" placeholder="enter roll no" required> </td>
 </tr>
 <tr>
<td> full name </td>
<td> <input type="text" name="name" placeholder="enter fullname" required> </td>
 </tr>
 <tr>
<td> city </td>
<td> <input type="text" name="city" placeholder="enter city" required> </td>
 </tr>
 <tr>
<td> parents  contact no</td>
<td> <input type="text" name="pcon" placeholder="enter the contect no of parents" required> </td>
 </tr>
 <tr>
<td> standerd </td>
<td> <input type="number" name="std" placeholder="enter standerd" required> </td>
 </tr>
 <tr>
<td> image </td>
<td> <input type="file" name="simg" required> </td>
 </tr>
 <tr>
<td colspan="2" align="center"> <input type="submit" name="submit" value="submit"> </td>
 </tr>


</table>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
$rolno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcon=$_POST['pcon'];
$std=$_POST['std'];
$qry="INSERT INTO `student`(`rollno`,`name`,`city`,`pcont`,`standerd`) VALUES ('$rolno','$name','$city','$pcon','$std')";

$run=mysqli_query($con,$qry);

if($run == true)
{
    ?>
<script>
alert('data inserted successfully');
 </script>

    <?php
}




}

?>