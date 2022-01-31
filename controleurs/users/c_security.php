<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../vues/v_connexion.php');
}