<?php
session_start();
session_destroy();
unset($_SESSION['username']);
session_start();
header("location:index.php");



?>