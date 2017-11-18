<?php 
	
	//Khởi tạo giá trị biến mảng, kết nối
	$name = Kyoto;
	$age = 19;

	//Xử lý...
	$name .= ': come to devil';

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP LAYOUT</title>
</head>
<body>
	<?php
		// Đưa kết quả, html format
		echo $name."<br>
		age: ".$age;
	?>
</body>
</html>
<?php 
	//Đóng các kết nối..
	//closeConnection()
?>