<html>
<head>
	<title>Prefiling Text Field</title>
</head>
<body>
<form action="<?php $_server['php_self'];?>" method="post">
Nama
		<input type="text" name="nama" 
		value="<?php
		echo isset($_POST['nama'])? $_POST['nama'] :'';
		?>"
		/> <br />
		
		<input type = "submit" value ="OK" />
	</form>
	<?php
	if(isset($_POST['nama'])){
	echo $_POST['nama'];
	}
	?>
</body>
</html>