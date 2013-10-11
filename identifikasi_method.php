<html>
<head>
	<title>Identitas Metode</title>
</head>
<body>
<form action="<?php $_server['php_self'];?>" method="get">
Nama
		<input type="text" name="nama" /> <br />
		<input type = "submit" value ="OK" />
	</form>
	<?php
	if(isset($_REQUEST['nama'])){
	echo 'Metode, '.$_SERVER['REQUEST_METHOD'];
	}
	?>
</body>
</html>