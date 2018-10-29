<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "n089p351", "npelletier", "n089p351");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n" . $mysqli->connect_error);
    exit();
}
echo "<body><ul>";
if(!empty($_POST['posts'])){
  foreach($_POST['posts'] as $post_id){
    $query = "DELETE FROM Posts WHERE post_id ='".$post_id."'";
    if($mysqli->query($query)){
      echo "Successfully deleted post $post_id <br>";
    }else{
      echo "Could not delete post $post_id";
    }
  }
}
echo '<a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></ul></body>';
$mysqli->close();
?>