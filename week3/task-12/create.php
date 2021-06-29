<?php 
  require_once("./db/db.php");
  $db = new Database();

  $db->createAccount($_POST["email"],$_POST["password"]);
  echo "created";
?>