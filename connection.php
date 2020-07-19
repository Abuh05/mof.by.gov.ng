<?php
  $conn = new mysqli('localhost', 'khaninit', 'wr06nF1J.Y5-Yg', 'khaninit_file-management');
    if($conn->connect_error){
      die("Fatal Error: Can't connect to database: ". $conn->connect_error);
    }
?>