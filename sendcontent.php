<?php
  include "conncontent.php";
  $mytopic = $_POST['mytopic'];
  $sql = "INSERT INTO `content`(`topic`) VALUES ('$mytopic')";
  $result = $conn->query($sql);
  ?>
<html>
  <head>
    <h1>Thank you for adding your own ideas!</h1>
  </head>
  <body>
    <a href="sendcontentpage.php">Go Back</a>
  </body>

</html>
