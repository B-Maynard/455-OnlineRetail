<?php

function getConnection() {
  $connection = new mysqli(
    "localhost:3306", //host
    "root", //username
    "", //password
    "455-final" //database
  );

  if ($connection->connect_error) {
    die("Could not connect: " . $connection->connect_error);
  }

  return $connection;
}