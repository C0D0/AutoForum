<?php 
    session_start(); 
    require('../controleurs/users/c_montrer-profile-utilisateur.php');   
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../assets/includes/head.php'; ?>
<body>
    
    <br><br>

    <div class="container">
        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }

            if(isset($getHisQuestions)){

                ?>
                <div class="card">
                    <div class="bigTitle1">
                        <h4>@<?= $user_pseudo; ?></h4>
                        <br>
                        <hr>
                        <br>
                        <p><?= $user_lastname . ' ' . $user_firstname; ?></p>
                    </div>
                </div>
                <br>
                <?php
                while($question = $getHisQuestions->fetch()){ 
                    ?>
                    <div class="darkBox">
                    <div class="smBox">
                        <div class="bigTitle1">
                            <?= $question['titre']; ?>
                        </div>
                        <div class="card-body">
                            <?= $question['description']; ?>
                        </div>
                        <div class="card-footer">
                            Par <?= $question['pseudo_auteur']; ?> le <?= $question['date_publication'];  ?>
                        </div>
                    </div>
                    </div>
                    <br>
                    <?php
                }

            }
        ?>  
    </div>

</body>
</html>