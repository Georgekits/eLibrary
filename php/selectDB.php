<html>
    <body>
        <?php
          include 'db_connection.php';
          $str_json = file_get_contents('php://input');
          //Decoding received JSON to array
          $response = json_decode($str_json,true); 
          //Get values
          $search = $response['search'];
          //searching every row of 'books' with the keyword entered
          $sql = "SELECT * FROM books where id like '%$search%' or author like '%$search%' or title like '%$search%' or genre like '%$search%' or price like '%$search%'";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              ?>
              <div class="col-lg-4">
                <div class="resultitem">
                    <p>Author: <?php echo $row["author"];?></p>
                    <p>Title: <?php echo $row["title"];?></p>
                    <p>Genre: <?php echo $row["genre"];?></p>
                    <p>Price: <?php echo $row["price"];?> </p>
                </div>
             </div>
              <?php
              }
          } else {
              ?>
              <script>
                  alertify.alert("Update","There are no books with this keyword");
              </script>
              <?php
          }
          $conn->close();
        ?>

</body>
</html>