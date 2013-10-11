<html>
<head>
	<title>Metode POST</title>
</head>
<body>
<form action="<?php $_server['php_self'];?>" method="post">
Nama
		<input type="text" name="nama" /> <br />
		<input type = "submit" value ="OK" />
	</form>
	<?php
	if(isset($_POST['nama'])){
	echo 'Hallo, '.$_POST['nama'];
	}
	?>
</body>
</html>