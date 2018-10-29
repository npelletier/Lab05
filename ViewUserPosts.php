<?php
  $username = $_POST["username"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n089p351", "npelletier", "n089p351");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $sql = "SELECT * FROM Posts WHERE author_id = '".$username."'";
  if($results = $mysqli->query($sql)){
    while($row = $results->fetch_assoc())
    {
      echo "Post $row[post_id]: $row[content]<br>";
    }
  }
  else{
    echo "No posts for that Username<br>";
  }

  /* close connection */
  $mysqli->close();


  echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';
 ?>
