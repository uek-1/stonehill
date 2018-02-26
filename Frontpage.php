
<html>
<body bgcolor="white">
  <font size="75" face="Fantasy" color="black">
    <p>
      <em><u><center>UNDERCONSTRUCTION</center></u></em>
    </p>
  </font>

<center><font size="10"><b>Topic of the day:
<?php
  include 'conncontent.php';
  $day = 1;
  $sql = "SELECT topic, id FROM content WHERE id = (SELECT day FROM day)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ". $row["topic"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</b></font></center>
<br/>
<br/>
<center>
<a href ="sendcontentpage.php">Add your very own ideas!</a>
<br>

<form action ="changeday.php" method="POST">
    <input type ="text" name = "myday" placeholder = "DEVTOOL-TYPE DAY HERE">

<button>ChangeDay</button>
</form>
<br/>

<a href="quiz.php">Take the QUIZ!</a>
</center>
</html>
