<?php
session_start();

  // Verifica se o formulário foi enviado
  if (isset($_POST["user"]) && isset($_POST["password"])) {
    // Recebe o valor do formulário
    $username = $_POST["user"];
    $senha = $_POST["password"];
    $submit = $_POST["submitButton"];
    
    //validação dos dodos do usuario
    if($username == 'admin' && $senha == 'admin') {
      $_SESSION['logado'] = true;
      $_SESSION['usuario'] = 'Admnistrador';

    //redirect user para tela de login
      header("location:listar-clientes.php");
      exit;

    } else {
      header("location:index.php?msg=error_login");
    }

    // Exibe o resultado
      if ($submit) {
      echo "<h1>Olá, ". $username . "</h1>";
      } else {
        echo "Invalid Data.";
      }      
  } else {
    header("location:index.php?msg=error_dados");
  }

    
  ?>
