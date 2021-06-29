<?php
  require_once("../db/db.php");
  $db = new Database();
  session_start();

  $email = $_POST['email'];
  $_SESSION['register-success'] = $db->createAccount($email, "123456");
  header('Location: ../my-account.php');
?>