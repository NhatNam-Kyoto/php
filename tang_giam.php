<!DOCTYPE html>
<html>
<head>
	<title>Toán tử tăng & giảm</title>
</head>
<body>
	<?php 
		$a = 10;
		$x = $a++; // x=a=10, a =11
		$y = ++$a; //$y = $a = 12
		echo $a.', '.$x. ', '. $y. '<br>';//12, 10, 12
		echo $a++.'<br>'; //12 thực chất a =13
		echo ++$a.'<br>'; //14
		//===============================================

		$b = 10;
		$u = $b--;//u = b =10,b =9
		$v = --$b;//v = 8, b =8;
		$w = $b-- - --$u + ++$v;//8-9+9
		echo $u.', '. $v.', '. $w. '<br>';//9, 9,7
		echo $b--."<br>";//7 thực chất = 6
		echo --$b."<br>";//5
	?>
</body>
</html>