<?php
    require('../controleurs/users/c_security.php');
    require('../controleurs/questions/c_infos-questions-modifier.php');
    require('../controleurs/questions/c_modifier-question.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../assets/includes/head.php'; ?>
<body>
    

    <br><br>
    <div class="darkBox">
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        
        <?php 
            if(isset($question_content)){ 
                ?>
                <form method="POST">
                   
                    
                    <input type="text" class="smBox" name="title" value="<?= $question_title; ?>">
                    <textarea class="smBox" name="description"><?= $question_description; ?></textarea>
                    <textarea type="text" class="smBox" name="content"><?= $question_content; ?></textarea>
                    <button type="submit" class="smBox1" name="validate">Publier la question</button>
                </form>
                <?php
            }
        ?>
        

    </div>
    

</body>
</html>