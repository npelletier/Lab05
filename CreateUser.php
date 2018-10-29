<?php
  $username = $_POST["Username"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n089p351", "npelletier", "n089p351");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $sql = "INSERT INTO Users (user_id) VALUES ('$username')";

  if ($mysqli->query($sql)==TRUE) {
    echo "New User successfully added<br>";
  }
  else{
    echo "Username already exists!";
  }

  /* close connection */
  $mysqli->close();


  echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';
 ?>
