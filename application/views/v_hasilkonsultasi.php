<body>
	<?php 
	foreach ($evidence as $key => $value) {
		echo $key."<br/>";
		foreach ($value as $a => $b) {
			echo $a ."=>". $b ."<br/>";
		}
	}
	?>
</body>