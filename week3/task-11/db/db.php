<?php 

  class Database{
    private $db; 

    public function __construct(){
      $pdo = new PDO('mysql:host=localhost;port=3306;dbname=argenova', 'root', 'rakoon');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->db = $pdo;
    }

    public function createAccount($email){
      $stmt = $this->db->prepare("INSERT INTO users(email,password) VALUES(:email, :password)");
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':password', "123456");
      $stmt->execute();

      return true;
    }

    public function login($email, $password){
      echo $email.'<br>';
      echo $password.'<br>';
      echo "SELECT * FROM users WHERE email=$email AND password=$password".'<br>';
      

      $stmt = $this->db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
      $stmt->bindValue(':email', $email, PDO::PARAM_STR);
      $stmt->bindValue(':password', $password, PDO::PARAM_STR);
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
  }
  
?>