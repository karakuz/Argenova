<?php 
  require_once("../db/db.php");
  $db = new Database();
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];

  $_SESSION['login-success'] = $db->login($email,$password);
  header('Location: ../cms.php');
?>