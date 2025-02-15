<?php
  /*  $nome = $_GET['usuario'];
    $email = $_GET['email'];   */

    $nome = $_POST['usuario'];
    $email = $_POST['email'];

    echo '<h3>Bem vindo, '.$nome.'</h3>
    <h4>Seu e-mail: '.$email.'</h4>';
?>
