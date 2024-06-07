<?php
include_once("bdd/inc.php");

session_start();

$nom = (isset($_POST["nom"]) && !empty($_POST["nom"])) ? htmlspecialchars($_POST["nom"])  : "null";
$password = (isset($_POST["password"]) && !empty($_POST["password"])) ? htmlspecialchars($_POST["password"])  : "null";

if($nom&&$password){

    include_once("bdd/inc.php");

   try {
       $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
       // Options de PDO
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

       $qry=$pdo->prepare("SELECT * FROM user WHERE nom=?");
       $qry->execute(array($nom));
       $data_user=$qry->fetch();
       // verification de mot de passe et email
       if($data_user && password_verify($password, $data_user["password"]) ){
           // definition du nom grace à la session
           $_SESSION["nom"]= $data_user["nom"];
           echo "Vous êtes connecté ! Vous pouvez maintenant commencer à jouer !";
           echo "<a href='index.php'>Vers la page d'accueil</a>";

       }else{
           echo"utilisateur introuvable";
       }

   }catch (PDOException $err) {
       // Gestion des erreurs
       $_SESSION["compte-erreur-sql"] = $err->getMessage();
       header("location:pageerreur.php");
       exit();
   }
}else{
   echo"l'email ou le mot de passe ne sont pas correctes";
}

?>
