<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="style.css">

<?php header('Content-type: text/html; charset=ISO-8859-1');
  /*  $nome = $_GET['usuario'];
    $email = $_GET['email'];   */

   $n1 = $_POST['n1'];
   $n2 = $_POST['n2'];
   $n3 = $_POST['n3'];

   $media = ($n3+$n2+$n1)/3;

   if($media<7){
        echo '<h3 id="menor">Reprovado com '.number_format($media, 2, ",",".").'</h3>';
   }else{
        echo '<h3 id="maior">Aprovado com '.number_format($media, 2, ",",".").'</h3>';
   }

?>
</html>