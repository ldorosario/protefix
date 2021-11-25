<?php
session_start();

if(!$_SESSION['sessao'])
{
header("Location:/");
}

?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <title>ESTOQUE</title>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/SERVIDOR/SCRIPTS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SERVIDOR/SCRIPTS/css/simple-sidebar.css" rel="stylesheet">
  <link href="estoque.css" rel="stylesheet">
  <script src='estoque.js'></script>

</head>

<body onload="Carrega_lista_produtos()"></body>

<div class="d-flex " id="wrapper">
  <div class="bg-light border-right " id="sidebar-wrapper">
    <div class="sidebar-heading">
      <center><b>ESTOQUE</b> <i class='fas fa-warehouse'></i></center>
    </div>
    <div class="list-group list-group-flush ">
      <center>
        <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_lista_produtos()">PROCURAR
          PRODUTO</a>
        <div class="dropdown">
          <button type="button" class="list-group-item list-group-item-action bg-light dropdown-toggle"
            data-toggle="dropdown">
            COMPRAS
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_lista_compras()">SOLICITAÇÕES PENDENTES</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_lista_compras_efetuadas()">JÁ EFETUADAS / AGUARDANDO CHEGADA</a>

          </div>
        </div>
        <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_lista_remover()">LISTA DE REMOVIDOS</a>
      </center>
    </div>
  </div>

  <div id="page-content-wrapper">
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-light bg-light" id="menu-toggle"><b> &larr; Menu</b></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item">
            <a class="nav-link" href="/SERVIDOR/INTEGRADOR/"><i><b>Encerrar</b></i></a>
            </li>

          </ul>
        </div>
      </nav>

      <div class="container-fluid">

        <br>

        <div class="input-group mb-3">
          <input type="text" name="produto" id="myInput" class="form-control" placeholder="NOME DO PRODUTO"
            aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit"><b><i class="fa fa-search"></i> </b></button>
          </div>
        </div>

        <div id="conteudo_selecionado">

          <!--Conteudo via JS-->

        </div>


        <div id="snackbar">Carregando...<div class="spinner-border spinner-border-sm"></div>
        </div>


      </div>

      <script src="/SERVIDOR/SCRIPTS/vendor/jquery/jquery.min.js"></script>
      <script src="/SERVIDOR/SCRIPTS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


      <script>
        $("#menu-toggle").click(function (e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>


      <script>
        $(document).ready(function () {
          $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>



      </body>

</html>
