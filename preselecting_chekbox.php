<html>
<head>
	<title>Data Checkbox</title>
</head>
<body>
<form action="<?php $_server['php_self'];?>" method="post">
Hoby
		<input type="checkbox" name="hobby[]" value="Membaca"/>
		Membaca
		<input type="checkbox" name="hobby[]" value="Olahraga" checked />
		Olahraga
		<input type="checkbox" name="hobby[]" value="Menyanyi"/>
		Menyanyi <br />
		<input type="submit" value="ok" />
		</form>
		<?php
		//Ekstraksi nilai
	if(isset($_POST['hobby'])){
	foreach ($_POST['hobby'] as $key => $val){
	echo $key . ' -> ' .$val . '<br />';
	}
	}
	?>
</body>
</html>