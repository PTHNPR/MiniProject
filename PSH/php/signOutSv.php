<?php 

session_start();

unset($_SESSION["uGuId"]);
unset($_SESSION["userId"]);
unset($_SESSION["userNick"]);

echo "<script> location.href='/main.php'; </script>";

?>