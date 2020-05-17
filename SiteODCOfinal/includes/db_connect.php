<?php
  try{
    $db=new PDO('mysql:host=pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=dduqnfxjfazikpup','x56nty91zd1ta89f','buxoeqihlctss731');

  }
  catch(PDOException $e){
      die('Erreur :'.$e->getMessage());
  }

?>
