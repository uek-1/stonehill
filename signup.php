<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (uid, pwd)
VALUES ('$uid', '$pwd')";
$result = $conn->query($sql);

header("Location: stone.php");
?>
