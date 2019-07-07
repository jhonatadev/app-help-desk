<?php

  session_start();

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';
  
  // // Remover índices do array de sessão
  // // unset()
  
  // unset($_SESSION['x']); // Para remover o índice apenas se ele existir  

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';
  
  // // Destruir a váriavel de sessão
  // // session_destroy()
  
  // session_destroy(); // Será destruida
  // // Forças um redirecionamento
  
  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';

  session_destroy();
  header('Location: index.php');

?>