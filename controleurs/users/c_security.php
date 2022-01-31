<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../auto-forum/vues/v_connexion.php');
}