<!DOCTYPE html>

<html>
	<body>
		<?php
			include 'db_connection.php';
			$str_json = file_get_contents('php://input');//GET info from html
            $response = json_decode($str_json,true); // Decode info and puts it in an array
            //takes each variable
            $author = $response['author'];
            $title =  $response['title'];
            $genre =  $response['genre'];
            $price =  $response['price'];
            
            $tsql= "INSERT INTO books (author, title, genre, price) VALUES ('$author','$title','$genre','$price')";//insert query
            if ($conn->query($tsql) === TRUE) {
				?>
                <script>
                    alertify.alert("Success","New book stored to your digital library");
                </script>
				<?php
            } else {
                echo "Error: " . $tsql . "<br>" . $conn->error;
            }
		?>

	</body>
	
</html>