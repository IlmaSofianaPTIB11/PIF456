<HTML>
	<HEAD>
		<TITLE>Operasi Logika</TITLE>
	</HEAD>
	
	<BODY>
		<?php
			$a=(-6);
			$b=7;
	
			print "a = $a <BR>";
			echo "b = $b <BR><BR>";
			
			if ($a >=0 && $b>=0)
			{	echo "<h2> Keduanya Bilangan positif";	}
			else if ($a <=0 && $b<=0)
			{	echo "<h2> Keduanya Bilangan negatif";	}
			else if ($a >=0 && $b<=0)
			{	echo "<h2> a adalah bilangan positif dan b bilangan negatif";	}
			else if ($a <=0 && $b>=0)
			{	echo "<h2> a adalah bilangan negatif dan b bilangan positif";	}
		?>
	</BODY>
</HTML>