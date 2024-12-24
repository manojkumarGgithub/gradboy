<?php
require 'p1config.php';
$_SESSION=[];
session_unset();
session_destroy();
header("Location: p1login.php");
?>