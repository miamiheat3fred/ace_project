<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=fredycha_ace_db', 'fredycha_ace_user1', 'myPassword&fc!!');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

include 'home/home.html.php';
