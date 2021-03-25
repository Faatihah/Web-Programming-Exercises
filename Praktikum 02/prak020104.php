<html>
 	<head>Headings</head>
 	<body>
 	<?php
		$i = 1;
		while ($i <= 6){
            $jum = $i + 1;
			
			if($i% 2 != 0)
				echo "<h".$i.">Heading ".$i."</h".$i.">";
			
			if($i% 2 == 0)
				echo "<h".$i."><font color='red'>Heading ".$i."</font></h".$i.">";
				$i++;

		}
 	?>
 	</body>
</html>
