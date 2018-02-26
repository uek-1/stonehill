<?php
  include "conncontent.php";
  $myday = $_POST['myday'];
  $sql = "UPDATE `day` SET `Day` = '$myday' WHERE `day`.`id` = 1; ";
  $result = $conn->query($sql);
  ?>
<html>
  <head>
    <h1>Day is changed!</h1>
  </head>
  <body>
    <a href="Frontpage.php">Go Back</a>
  </body>

</html>
