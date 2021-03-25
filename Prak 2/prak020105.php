<html>
 	<head>Headings</head>
 	<body>
 	<?php
	$i = 0;
	
	do{
		$jum = $i + 1;
		$i++;
  
		if($jum% 2 != 0)
			echo "<h".$jum.">Heading ".$jum."</h".$jum.">";
			
		if($jum % 2 == 0)
			echo "<h".$jum."><font color='red'>Heading ".$jum."</font></h".$jum.">";
			

	}while ($i <= 5)
 	?>
 	</body>
</html>
