<?php
include("asset/common/head.php");
?>

<body>

      
    <form class="inscription" action="traitement.inscrip.php" method="post">
       
       
            <label class="orden" for="nom">NOM D’UTILISATEUR </label>
            <input class="troiss" type="text" id="nom" name="nom" pattern = "/[A-Za-z0-9\x{00c0}-\x{00ff}]{5,250}/u"/>

            <label class="orden" for="email"> ADRESSE EMAIL</label>
            <input class="troiss" type="email" id="email" name="email" />
          
            <label class="orden" for="password">MOT DE PASSE</label>
            <input class="troiss" type="password" id="password" name="password"  pattern="[A-Za-z0-9_$]{8,}"/>
            <a href="connexion.php"><h5> Vous avez déjà un compte? Connectez-vous!</h5></a>

            <button class="btt" type="submit">SEND</button>
      
            <a href="index.php"><h6>Revenir à l’acceuil</h6></a>

        
              
    
      </form>

   <script src="script.js"></script>
</body>
</html>

