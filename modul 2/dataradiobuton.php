<html>
<head>
	<title>Prefill Data Radio Button</title>
</head>
<body>
<form action="<?php $_server['php_self'];?>" method="post">
Jenis Kelamin
		<input type="radio" name="sex" value="pria" checked
		<?php
		if ($_POST['sex']=='Pria'){
		echo 'checked="checked"';
		}
		?>
		/>Pria
		<input type="radio" name="sex" value="wanita"
		<?php
		if($_POST['sex']=='Wanita'){
		echo 'checked="checked"';
		}
		?>
		/>Wanita <br />
		
		<input type="submit" value="ok" />
	</form>
	<?php
	if(isset($_POST['sex'])){
	echo $_POST['sex'];
	}
	?>
</body>
</html>