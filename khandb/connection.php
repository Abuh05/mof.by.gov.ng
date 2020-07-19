<?php
  $conn = new mysqli('localhost', 'root', '', 'file-management');
    if($conn->connect_error){
      die("Fatal Error: Can't connect to database: ". $conn->connect_error);
    }
?>