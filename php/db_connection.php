<html>
<body>

<?php
    // foreach ($_SERVER as $key => $value) {
	// 	if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {//obtaining info for connection
	// 		continue;
	// 	}
	
		$servername = '83.212.105.20';
		$dbname = 'it21520';
		$username = 'it21520';
		$password = 'm%92m07h';
	// }
	$conn = mysqli_connect($servername, $username, $password,$dbname) or die (mysql_error());//connection to DB
	// Check connection
	if ($conn->connect_error) {//check connection
		die("Connection failed: " . $conn->connect_error);
	}
?>
</body>
</html>