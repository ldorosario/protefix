<?php
session_start();

if(!$_SESSION['sessao'])
{

}
else
{
  header("Location:/CLIENTE/".$_SESSION['sessao']."");
}

?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/SERVIDOR/SCRIPTS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SERVIDOR/SCRIPTS/css/simple-sidebar.css" rel="stylesheet">
<link href="master.css" rel="stylesheet">

<title>ENTRAR</title>
<div class="wrapper fadeInDown">
  <div id="formContent">
  
    <br>
    <div class="fadeIn first">
      <img src="http://www.protefix.com.br/home/images_clientes/050/logos/50_logotipo_113641_.png" id="icon" alt="User Icon" />
    </div>
    <br>    
  
      <form action="/SERVIDOR/INTEGRADOR/entrada.php" method="POST">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-mail" >
      <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Senha" >
      <input type="submit" class="fadeIn fourth" value="Entrar" name="Submit">
      <form>

  </div>
</div>

<div id="snackbar">Carregando...<div class="spinner-border spinner-border-sm"></div>



<script src="/SERVIDOR/SCRIPTS/vendor/jquery/jquery.min.js"></script>
<script src="/SERVIDOR/SCRIPTS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
