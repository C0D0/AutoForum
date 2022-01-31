<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: ../../vues/v_connexion.php');