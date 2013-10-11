<html>
<head>
	<title>Metode Get</title>
</head>
<body>
<form action="<?php $_server['php_self'];?>" method="get">
Nama
		<input type="text" name="nama" /> <br />
		<input type = "submit" value ="OK" />
	</form>
	<?php
	if(isset($_GET['nama'])){
	echo 'Hallo, '.$_GET['nama'];
	}
	?>
</body>
</html>