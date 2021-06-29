<?php 
  require_once("./db/db.php");
  $db = new Database();

  $db->deleteUser($_POST['id']);
  echo "deleted";
?>