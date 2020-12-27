<html>
<head>
	<title>Hello goorm</title>
</head>
<body>
	<h1>Hello world</h1>
	<?php
	
	$conn = mysqli_connect("localhost", "hypark", "0811", "lunchmach");
	
	$sql = "SELECT * FROM restaurant_list";
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result)){
		echo ";; ".$row[restaurant_nm]."<br/>";
	}
		echo "Contents here";
	?>
</body>
</html>