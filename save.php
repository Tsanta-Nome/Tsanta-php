<?php

    var_dump($_POST);
    $pseudo=$_POST["pseudo"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_app";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
    echo "New record created successfully";
    */
    
    $sql = $conn->prepare( "INSERT INTO user_app(user_pseudo,user_email,user_password) VALUES (:pseudo, :email, :pass)");
    $sql->bindParam(':pseudo', $pseudo);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':pass', $pass);
    $sql->execute();
   /* die()*/

   if (isset($_POST['inscr'])) 
     {
          $pseudo =htmlspecialchars($_POST['pseudo']);
          $email =htmlspecialchars($_POST['email']);
          $pass =htmlspecialchars($_POST['pass']);
       
   if (!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['pass'])) 
   {
      $username = strlen($pseudo);
      if ($nomlength <= 50)
       {           
                  $insertmbr = $bdd->prepare("INSERT INTO my_app (pseudo,email,pass) VALUES (?,?,?,?)");
                  $insertmbr->execute(array($pseudo,$email,$pass));
                  $_SESSION['comptecree'] ="L'utilisateur est inséré";
                  HEADER('location:save.php');    
      }
    
      else{
        $erreur = "Votre nom ne doit pas depasser de 25 caracters";
      }
    }
   else
   {
    $erreur ="Tous les champs sont complets";
   }
 }
 catch(PDOException $e)
 {
 $conn->rollback();
 echo "Error: " . $e->getMessage();
 }
 $conn = null;
}

?>