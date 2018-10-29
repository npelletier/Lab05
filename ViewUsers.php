<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n089p351", "npelletier", "n089p351");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $sql = "SELECT * FROM Users";
  $results = $mysqli->query($sql);
  while($row = $results->fetch_assoc())
  {
    echo "Username: $row[user_id]<br>";
  }

  /* close connection */
  $mysqli->close();


  echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';
 ?>
