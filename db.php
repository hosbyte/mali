<?php
  $db = mysqli_connect('Localhost', 'hosbytei', 'Hosein.s81', 'hosbytei_mali');
  mysqli_set_charset($db, "utf8mb4");

  if (!$db)
  {
    die("Database connection failed: " . mysqli_connect_error());
  }
?>