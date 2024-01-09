<?php

$mysqli = new mysqli("localhost", "root", "", "registro");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }