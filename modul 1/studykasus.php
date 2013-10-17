<html>
<head>
	<title>Studi Kasus</title>
</head>
<body>
<form action="<?php $_server['php_self'];?>" method="post">
		Sekarang jam (format 24 jam): <input type="text" name="jam" />
		<input type="submit" />
	</form>
	<?php
	function greeting($jam){
		if($jam < 11 AND $jam > 0){
			echo 'Selamat Pagi';
		}elseif($jam < 19 AND $jam > 0){
			echo 'Selamat Siang';
		}elseif($jam < 25 AND $jam > 0){
			echo 'Selamat Malam';
		}else{
			echo '';
		}
	}
	echo 'Sekarang Jam ' . $_POST["jam"] . ':00 WIB, ';
	greeting($_POST["jam"]);
	?>
</body>
</html>