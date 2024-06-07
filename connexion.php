<?php
include("asset/common/head.php");
?>

<body>

   <form class="inscription" action="traitement_connex.php" method="post">

        <label class="orden" for="nom">NOM D’UTILISATEUR </label>
        <input class="troiss" type="text" id="name" name="nom" />

        <label class="orden" for="password">MOT DE PASSE</label>
        <input class="troiss" type="password" id="password" name="password" />

        <a href="inscription.php"><h5>Vous n’avez pas de compte? Inscrivez-vous!</h5></a>

        <button class="bbd" type="submit">S’INSCRIRE</button>
        
        <a href="index.php"><h6>Revenir à l’accueil</h6></a>

<script src="asset/js/script.js"></script>

</form>
    

</body>
</html>

