<?php
session_start();

$conn = mysqli_connect(
  'db',
  'root',
  'test',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
