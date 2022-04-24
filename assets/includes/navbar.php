
<nav>
        <div class="logo" href="../assets/image/logo.png"></div>
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
        <ul>
            <li><a href="../../index.php">Accueil</a></li>
            <li><a href="../../vues/v_publier-question.php">Publier une question</a></li>
            <li><a href="../../vues/v_mes-questions.php">Mes questions</a></li>
            <li><a href="../../vues/v_mes-questions.php" class="active">Connexion</a></li>
            <?php 
              if(isset($_SESSION['auth'])){
                ?>
                  <li><a href="../../vues/v_profile.php?id=<?= $_SESSION['id']; ?>" class="active">Mon profil</a></li>
    
                  <li><a href="../../controleurs/users/c_deconnexion.php" class="active">Déconnexion</a></li>
            <?php }
                ?>
        </ul>
    </nav>