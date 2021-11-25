<!DOCTYPE html>
<html lang="ptbr">
<meta charset="UTF-8">

<head>


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <title>EXPEDIÇÃO</title>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/SERVIDOR/SCRIPTS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SERVIDOR/SCRIPTS/css/simple-sidebar.css" rel="stylesheet">
  <link href='expedicao.css' rel="stylesheet">
  <script src='expedicao.js'></script>

</head>

<body onload="Carrega_lista_entrega()"></body>

<div class="d-flex " id="wrapper">
  <div class="bg-light border-right " id="sidebar-wrapper">
    <div class="sidebar-heading">
      <center><b>EXPEDIÇÃO</b> <i class='fas fa-warehouse'></i></center>
    </div>
    <div class="list-group list-group-flush ">
      <center>

          <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_lista_entrega()">ENTREGAS</a>
  
       
     
            <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_etiquetas()">ETIQUETAS TRANSPORTADORA</a>
      

        <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_lista_separacao()">SEPARAÇÃO</a>
           
         
          
          <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_lista_motorista()">MOTORISTAS</a>
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
              <a class="nav-link" href="#"><i><b>Encerrar</b></i></a>
            </li>

          </ul>
        </div>
      </nav>

      <div class="container-fluid">

        <br> 

        <div class="input-group mb-3">
          <input type="text" name="produto" id="myInput" class="form-control" placeholder="BUSCAS...." aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus >
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit"><b><i class="fa fa-search"></i> </b></button>
          </div>
        </div>


        <div id="conteudo_selecionado" >

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


    



      </body>



<!-- The Modal -->
<div class="modal fade" id="myModalEtiqueta">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i>CRIAR ETIQUETA</i></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
  
      <form method="POST" action="http://192.168.1.167/SERVIDOR/EXPEDICAO/labelary.php" target="_blank">
    <div class="input-group mb-3">
<input type="text" name="nfe" class="form-control" placeholder="NF-E" aria-describedby="basic-addon2" autofocus="autofocus" >
<input type="text" name="destino" class="form-control" placeholder="DESTINO" aria-describedby="basic-addon2" autofocus="autofocus" >
<div class="input-group-append">
  <button class="btn btn-primary" type="submit"><b><i class="fa fa-plus" style="font-size:20px"></i> </b></button>
</div>
</div>
</form>
<center><h4>ETIQUETAS PARA CAIXAS DE SEPARACAO</h4></center>
<form method="GET" action="http://192.168.1.167/SERVIDOR/EXPEDICAO/labelary_caixa_preta.php" target="_blank">
    <div class="input-group mb-3">
<input type="text" name="numero" class="form-control" placeholder="NUMERO ETIQUETA DA CAIXA" aria-describedby="basic-addon2" autofocus="autofocus" >
<div class="input-group-append">
  <button class="btn btn-primary" type="submit"><b><i class="fa fa-plus" style="font-size:20px"></i> </b></button>
</div>
</div>
</form>
<center><h4>ETIQUETAS PARA ITEMS MOSTRUARIO LOJA</h4></center>
<form method="POST" action="http://192.168.1.167/SERVIDOR/EXPEDICAO/labelary_preco.php" target="_blank">
    <div class="input-group mb-3">
<input type="text" name="COD_PROD" class="form-control" placeholder="CODIGO PRODUTO" aria-describedby="basic-addon2" autofocus="autofocus" >
<div class="input-group-append">
  <button class="btn btn-primary" type="submit"><b><i class="fa fa-plus" style="font-size:20px"></i> </b></button>
</div>
</div>
</form>
      </div>
    </div>
  </div>
</div>

</div>

</html>



<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
  