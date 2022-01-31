<?php 
    require('../controleurs/users/c_security.php');
    require('../controleurs/questions/c_mes-questions.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../assets/includes/head.php'; ?>
<body>
  

    <br><br>
    <div class="container">
    <p class="bigTitle">Mes questions:</p><br><br><br>
        <?php 
            
            while($question = $getAllMyQuestions->fetch()){
                ?>
                <div class="darkBox">
                <div class="smBox">
                    <h5 class="card-header">
                        <a href="v_article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                            <?= $question['description']; ?>
                        </p>
                        <br>
                        <br>
                        <a href="v_article.php?id=<?= $question['id']; ?>" class="smBox1">Accéder à la question</a>
                        <a href="v_modif-questions.php?id=<?= $question['id']; ?>" class="smBox1">Modifier la question</a>
                        <a href="../controleurs/questions/c_supprimer-question.php?id=<?= $question['id']; ?>" class="smBox1">Supprimer la question</a>
                    </div>
                    </div>
                </div>
                <br>
                <?php
            }

        ?>

    </div>

</body>
</html>