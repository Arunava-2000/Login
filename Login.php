<html>
<head>
<link rel="stylesheet" type="text/css" href="login1.css">
<title>Login</title>
<script language="javascript">
function form_val()
{
if(document.log.uname.value=="")
{
alert("Please enter username");
document.log.uname.focus();
return false;
}
if(document.log.password.value=="")
{
alert("Please enter password");
document.log.password.focus();
return false;
}
else{
return true;
}
}
</script>
</head><body>
<h2>Login</h2>
<div class="log">
<form method="post" action="" id="log" name="log"
onsubmit="form_val()">
<label for="email">Username</label><br>
<input type="text" name="uname" id="uname"
placeholder="Username">
<br>
<br>
<label for="password">Password : </label><br>
<input type="password" name="password" id="password"
placeholder="Min 8 characters">
<br><br>
<input type="submit" value="Login" id="log1" name="log1">
</form>
</div>
</form>
<?php
$conn = mysqli_connect('localhost','root','','trial');
if (!$conn)
{
die('Could not connect: ' . mysql_error());
}
$stat="no";
if(isset($_POST['log1']))
{
$username=$_POST['uname'];
$password=$_POST['password'];
$res1 = mysqli_query($conn,"SELECT * FROM login where user ='".
$username . "' and pwd ='" . $password ."'");
while($row = mysqli_fetch_array($res1))
{
$stat="yes";
}
if($stat=="yes")
{
header ("Location: success.php");
}
else
echo "Wrong Credentials, Try Again!!";
}
mysqli_close($conn);
?>
</body>
</html>
