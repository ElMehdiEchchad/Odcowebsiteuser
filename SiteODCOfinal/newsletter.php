<?php 
require 'includes/db_connect.php';
if(isset($_POST['newsletterbutton'])){
   if(!empty($_POST['emailread'])) {
       $email=$_POST['emailread'];
   $st= $db->query("SELECT * FROM newslettersub");
    if($st->fetchAll()){
        echo "<script> alert('vous êtes déja abonnés avec nous') window.location.href='index.php''</script>";
    }
    else{
        $db->query("INSERT INTO newslettersub values'".$email);
        echo "<script> alert('merci pour votre abonnement!') window.location.href='index.php' </script>";
    }
    }


} 
?>
<script>  if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }</script>