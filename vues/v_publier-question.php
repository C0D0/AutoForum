<?php 

    require('../controleurs/questions/c_publier-question.php');
?>
<!DOCTYPE html>
<html lang="fr">
<link href="../assets/css/style.css" rel="stylesheet">

<?php include '../assets/includes/head.php'; ?>
<body>
    

    <br><br>
    <form method="POST">
    <div class="darkBox">
        <?php 
            if(isset($errorMsg)){ 
                echo '<p>'.$errorMsg.'</p>'; 
              
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>';
                 
            }
        ?>
        <br><br>
        <p class="bigTitle">Drop us a message:</p><br><br><br>
  

            <input type="text" class="smBox" name="title" placeholder="Titre de la question">
            <textarea class="smBox" name="description" placeholder="Description de la question"></textarea>
            <textarea type="text" class="smBox" name="content" placeholder="Contenu de la question"></textarea>
            <button type="submit" class="smBox1" name="validate">Publier la question</button>
   </form>
   </div>
</body>
</html>