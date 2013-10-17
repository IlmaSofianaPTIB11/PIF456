<head>
		<title> Table with PHP</title>  
	</head>    
		<table>  
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">  
      <tr>          
      <td>Jumlah baris</td>  
      <td>: <input type="text" size="15" name="baris"></td>  
      </tr>  
      <tr>  
      <td> Jumlah kolom  </td>  
      <td>: <input type="text" size="15" name="kolom"></td>  
      </tr>  
      <tr>    
      <td><input type="submit" name="submit" value=" Submit "></td>
      </tr>  
      </form>  
      </table>  
			<br />
      <?php if(isset($_GET['submit'])){
        $baris = $_GET["baris"];  
        $kolom = $_GET["kolom"];  
        function generate($baris, $kolom){  
          $cell = 0;  
          echo "<table border='2' cellpadding='10'>";  
          for($i = 0; $i < $baris; $i++){  
            echo "<tr>";  
              for($j = 0; $j < $kolom; $j++){  
                ++$cell;  
                echo "<td>$cell</td>";  
              }  
            echo "</tr>";  
          }   
          echo "</table>";  
      	}  
        if(isset($baris) AND isset($kolom)){  
            generate($baris, $kolom);  
        }  
       }
      ?>   
    </body>  
</html>
