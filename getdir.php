
<?php
  $dirc = $_GET["dirc"];
  echo $dirc ;
  echo "<br><br>";
  
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "robot_direction";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO direction (record)
  VALUES ('$dirc')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
