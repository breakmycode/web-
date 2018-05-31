<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}

?>

<html>
<head>
<title> Admin login </title>

</head>
<body>
<h1 align="center"> Admin login </h1>
<form action="login.php" method="post">
<table style="width:30%" align="center" border="1px">
<tr>
<td> USERNAME:- </td> <td> <input type="text" name="uname" reqired>  </td>
</tr>
<tr>
<td> PASSWORD:- </td> <td> <input type="text" name="pass" reqired>  </td>
</tr>
<tr>
<td colspan="2" align="center"> <input type="submit" value="login" name="login">  </td>
</tr>



</table>
</form>
</body>
</html>
<?php

include('C:\xaamp\htdocs\project\dbcon.php');
if(isset($_POST['login']))
{
   $username = $_POST['uname'];
   $password = $_POST['pass']; 

   $query = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
   $run=mysqli_query($con,$query);
   $row = mysqli_num_rows($run);
   if($row <1)
   {
       ?>
       <script>
       alert('username or password not match');
       window.open('login.php','_self');
        </script>
       <?php
    
   }
   else
   {
       $data=mysqli_fetch_assoc($run);
       $id=$data['id'];

       $_SESSION['uid']=$id;
       header('location:admin/admindash.php');
   }
}
?>