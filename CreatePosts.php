<?php
  $username = $_POST["Username"];
  $post = $_POST["Post"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n089p351", "npelletier", "n089p351");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $sql = "SELECT * FROM Users WHERE user_id = '".$username."'";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
    $sql2 = "INSERT INTO Posts (post_id, content, author_id) VALUES (DEFAULT, '$post', '$username')";
    if($mysqli->query($sql2)){
      echo "New post successfully added<br>";
    }
    else{
      echo "There was an error...";
    }
  }
  else{
    echo "Username does not exist<br>";
  }

  /* close connection */
  $mysqli->close();


  echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';
 ?>
