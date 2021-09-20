<html>
<body>
<?php
    $conn = new mysqli("localhost", "root", "", "hotel");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * from login";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
	
	while ($queryRow = $result->fetch_row()) {
    	echo " ";
    	for($i = 0; $i < $result->field_count; $i++){
        	echo " $queryRow[$i] ";
    }
    echo "  ";
}

	echo implode(" ",$row);
	?>

	
</body>

</html>