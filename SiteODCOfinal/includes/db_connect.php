<?php
  try{
    $db=new PDO('mysql:host=localhost;dbname=projetodco','root','');

  }
  catch(PDOException $e){
      die('Erreur :'.$e->getMessage());
  }

?>