<?php
session_start();
unset($_SESSION['Admin']);
unset($_SESSION['User']);
header('Location:index.html');
die();

?>