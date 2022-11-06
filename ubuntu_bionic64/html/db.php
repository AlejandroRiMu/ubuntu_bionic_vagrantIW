<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'myuser',
  'password',
  'mydb'
) or die(mysqli_erro($mysqli));

?>
