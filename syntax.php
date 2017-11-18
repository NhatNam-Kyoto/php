<!DOCTYPE html>

<html>
<head>
	<title>Syntax PHP <Print vs Echo ></title>
	<h1> BASIC SYNTAX: ECHO VS PRINT</h1>
</head>
<body>
	<?php
		//Comment đơn dòng
		#Comment đơn dòng
		/*CMT đa dòng
		  Dòng1
		  Dong2
		 */
		echo "<h1><p align='center'> <font color = 'purple' size = '45px'> BASIC SYNTAX: ECHO VS PRINT </p> </font> </h1>";
		echo "<h1><p align='right'> <font color = 'GREEN' size = '45px'> TITLE 2 </p> </font> </h1>";
		echo "<p align='left'> <font color='red' size = '25px'> Hello World! </font></p><br>";
		print "<p align='center'> <font color ='pink' size = '30px'> I'm Kyoto from #PoSec1! </font></p> ";
		#Print là một hàm số, nên có thể gán biến. It's not use for echo
		$out = print 'PHP ';
		echo $out, '<br>';
		#Lệnh print chỉ có thể được sử dụng với một tham số, trong khi lệnh echo có thể được dùng với nhiều tham số.
		print 'p <br>';
		echo 'p','h','p <br>';
		echo 'Check PHP VERSION: ', phpversion();

	?>
</body>
</html>