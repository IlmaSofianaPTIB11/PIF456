<head>
		<title> Table with PHP</title>  
	</head>    
		<table>  
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">  
      <tr>          
      <td>Jumlah sel</td>  
      <td>: <input type="text" size="15" name="sel"></td>  
      </tr>
	  <tr>  
      <td> Jumlah kolom  </td>  
      <td>: <input type="text" size="15" name="kolom"></td>  
      </tr>  
      <tr>    
      <td><input type="submit" name="submit" value=" Submit "></td>
      </tr>  
      </table>  
			<br />
  
        <?php
      $hitungan = 1;
	$sel = $_POST["sel"];
	$kolom = $_POST["kolom"];
	$baris = ceil($sel / $kolom);
	echo '<table align=center width=".$width." border=1>';
			for($a = 0; $a < $baris; $a++){
		echo '<tr>';
		for($b = 0; $b < $_POST["kolom"]; $b++){
			if($hitungan != NULL){
				echo '<td><center>' . $hitungan . '</center></td>';
				if ($hitungan < $sel AND $hitungan != NULL){
					$hitungan = $hitungan +1;
				}else{
					$hitungan = NULL;
				}
			}
		}
		echo '</tr>';
	}
	echo '</table>';
	?>
   </form>
    </body>  
</html>
