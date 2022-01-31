<?php require('../controleurs/users/c_connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include '../assets/includes/head.php'; ?>
<body>
    
    <br><br>
    
    <form class="darkBox" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>


        <input type="text" class="smBox" name="pseudo" placeholder="Pseudo">
   
        <input type="password" class="smBox" name="password" placeholder="Mot de passe">

        <button type="submit" class="smBox1" name="validate" class="bigTitle1" >Se Connecter</button>
        <br>
        <br>
        <a href="v_inscription.php" class="bigTitle1"><p>Je n'ai pas de compte, je m'inscris</p></a>
        <a href="v_forgotPassword.php" class="bigTitle1"><p>Mot de passe oublié</p></a>
      
    </form>

</body>
</html>