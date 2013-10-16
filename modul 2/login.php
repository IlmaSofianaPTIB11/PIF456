<html>
<head>
<title>Login </title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<div align="center" height="50"><strong><br>User name :</strong>
<br>
<input type="text" name="user" size="40" value="" ">
<br>
<br>
<strong> Password : </strong>
<br>
<input type="password" name="pass" size="40" ">
<br/>
<br/>
<input type="submit" name="submit" value="Login">
<br>
<?php 
if(($_POST['user']=='ilma') AND ($_POST['pass']=='1234'))
{
echo 'Selamat datang dan selamat menikmati '.$_POST['user'];
}
else
{
echo 'User name dan password yang anda masukkan salah';
}
?>
</form>
</body>
</html>

