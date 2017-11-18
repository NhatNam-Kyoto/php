<?php 
	$sotao = 10;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vòng lặp do while</title>
</head>
<body>
	<?php 
		do {
			$sotao --;
			echo "Tôi đã ăn một quả táo và còn lại ",$sotao, " quả táo <br>";
		} while ( $sotao > 0);
	?>
</body>
</html>