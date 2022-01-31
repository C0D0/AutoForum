<?php
try{
    $bdd = new PDO('mysql:host=mysql-c0d0.alwaysdata.net;dbname=c0d0_forum;charset=utf8;', 'c0d0', '29b8ff5d8d5');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}