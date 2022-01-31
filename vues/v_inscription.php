<?php require('../controleurs/users/c_inscription.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include '../assets/includes/head.php'; ?>
<body>
    <br><br>
    <form method="POST">
    <div class="darkBox">
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
            <br>
            <br>
        
            <input type="text" class="smBox" name="pseudo" placeholder="Pseudo">
               
            <input type="text" class="smBox" name="lastname" placeholder="Nom">
       
            <input type="text" class="smBox" name="firstname" placeholder="Prénom">
   
            <input type="password" class="smBox" name="password" placeholder="Mot de passe">
        
            <button type="submit" class="smBox1" name="validate" class="bigTitle1" >S'inscrire</button>
            <br>
            
            <br>
            <a href="v_connexion.php" class="bigTitle1"><p>J'ai déjà un compte, je me connecte</p></a>
        </div>
   </form>

</body>
</html>