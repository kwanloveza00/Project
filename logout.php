<?php
session_start();
<<<<<<< HEAD
unset($_SESSION['Admin']);
unset($_SESSION['User']);
=======
unset($_SESSION['login']);

>>>>>>> 75f08442a8c19931760714f55bc8f81016d6fce8
header('Location:index.html');
die();

?>