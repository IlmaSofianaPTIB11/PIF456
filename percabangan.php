<HTML>
	<HEAD>
		<TITLE>Percabangan</TITLE>
	</HEAD>
	
	<BODY>
		<?php
			$Hari = 'Kamis';
			
			print "<h1> $Hari <BR><BR>";
			
			switch ($Hari)
			{
				case 'Senin':
					echo "Teori multimedia";
				break;
				case 'Selasa';
					echo "Kewirausahaan";
				break;
				case 'Rabu';
					echo "Metodologi Penelitian";
				break;
				case 'Kamis';
					echo "Pratikum WEB";
				break;
				case 'Jum`at';
					echo "ADSI";
				break;
				default:
					echo "Hari libur";
				break;
			}
		?>
	</BODY>
</HTML>