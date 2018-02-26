<?php
session_start();
session_destroy();
header("Location: stone.php");
