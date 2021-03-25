<html>
 	<head>Headings</head>
 	<body>
 	<?php
 		for($i=1; $i <=6; $i++){
			if($i % 2 == 0){
				echo "<h".$i."><font color='red'>Heading ".$i."</font></h".$i.">";
			}else{
				echo "<h".$i.">Heading ".$i."</h".$i.">";
			}
 		}
 	?>
 	</body>
</html>
