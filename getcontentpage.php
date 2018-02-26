<?php
  include 'conncontent.php';
  $day = 1;
  $sql = "SELECT topic, id FROM content WHERE id = (SELECT day FROM day)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "your topic: ". $row["topic"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
