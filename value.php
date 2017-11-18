<!DOCTYPE html>
<html>
<head>
	<title>CÁC KIỂU GIÁ TRỊ</title>
</head>
<body>
	<h1><p align="center"> <font size="25px" color="red">CÁC KIỂU GIÁ TRỊ TRONG PHP</font></p></h1>
	<?php
	

	//--------------------CÁC KIỂU SỐ THƯỜNG DÙNG---------------------------------------------
	$int_var_1 = 123;
	$int_var_2 = 456;
	$double_var_1 = 1.234;
	$double_var_2 = 2.123;
	$boolean = TRUE;
	$null_var = NULL;
	$float_var = (float)$int_var_1;
	//-----------------------------------------------------------------------------------------
	
	if ($boolean) {
		echo $int_var_1,' + ', $int_var_2, '=', $int_var_1 + $int_var_2, "(INT)</br>"; 
		echo $double_var_1, ' + ', $double_var_2, '=', $double_var_1+$double_var_2, "(DOUBLE)</br>";
		echo is_float($float_var);
		echo '<br>';
		var_dump(isset($null_var));
		echo "</br>";
		var_dump((bool)$null_var);
		echo "<br>";
	}
	//---------------------ARRAY---------------------------------------------------------------
	$arr= array('Đây là phần tử 1', 'Đây là phần tử 2');
	print_r($arr);


	?>
</body>
</html>