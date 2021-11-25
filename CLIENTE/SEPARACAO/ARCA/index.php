<!DOCTYPE html>
<html lang="ptbr">
<meta charset="UTF-8">

<head>

<meta http-equiv="refresh" content="31">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <title>ARCA</title>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/SERVIDOR/SCRIPTS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SERVIDOR/SCRIPTS/css/simple-sidebar.css" rel="stylesheet">
  <link href='arca.css' rel="stylesheet">
  <script src='arca.js'></script>


</head>

<body>

<div class="d-flex " id="wrapper">
  <div class="bg-light border-right " id="sidebar-wrapper"> 
    <div class="sidebar-heading">
      <center><b>ARCA</b> <i class='fas fa-warehouse'></i></center>
    </div>
    <div class="list-group list-group-flush ">
      <center>
          <a href="#" class="list-group-item list-group-item-action bg-light" >SEPARAÇÃO</a>
          <a href="#" class="list-group-item list-group-item-action bg-light" >CONCLUIDOS</a>
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


        <div id="conteudo_selecionado" >

         
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
    <th class=" ">NUMERO</th>
      <th class=" ">NOME CLIENTE</th>
      <th class=" ">TIPO</th>
      <th class=" ">STATUS</th>
      <th class=" ">VENDEDOR</th>
      </tr>
  </thead>
  <tbody>


  <!-- PHP ABAIXO -->
  <?php
include 'conexaoMysql.php';  

date_default_timezone_set('America/Sao_Paulo');

$data = date('Y-m-d');

$sql = "SELECT * FROM logistica_separacao_fragmentada_arca WHERE SITUACAO NOT LIKE 'CONCLUIDO' ORDER BY POSICAO DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
 


  if($row['TIPO_TRANSP'] ==  "6"){
    echo "<tr class='bg-danger'>";
  }
  elseif($row['DT_EMISSAO'] <> $data)
{
  echo "<tr class='bg-warning '>";
}
  elseif($row['SINCRONIA'] == 1)
  {
    echo "<tr class='bg-info'>";
  }
  elseif($row['SINCRONIA'] == 1 && $row['TIPO_TRANSP'] == "6")
  {
    echo "<tr class='bg-warning'>";
  }
  else
  {
    echo "<tr>";
  }

  echo"<td>".$row['COD_PED']."</td>";

  if($row['NOME_CLI_FOR'] == "")
  {
    echo"<td class='' >CLIENTE S/ CADASTRO</a></td>";
  }else
  {
    echo"<td class='' >".$row['NOME_CLI_FOR']."</a></td>";
  }
 

  echo"<td class='' >".$row['TIPO_TRANSP']." / ".$row['TIPO_SEPARACAO']."</a></td>";
  $COD_PED = $row['COD_PED'];
  $COD_EMP = $row['EMPRESA'];
  $TIPO_SEPARACAO = $row['TIPO_SEPARACAO'];
  echo"<td>".$row['SITUACAO']."</td>";
  echo"<td>".$row['USU_INCLUI']."</td>";
 
   
  echo"<form action='proc_emseparacao.php' method='GET'>";
  echo"<td><select  name='SEPARADOR'  class='custom-select' required>
  <option selected></option>";

   include 'conexaoMysql.php';
   $sql = "SELECT*FROM cont_separadores WHERE setor like 'ARCA' ORDER BY nome ASC";
   $resultado = mysqli_query($conn, $sql);
   if(mysqli_num_rows($resultado) > 0)
   {
     while($row = mysqli_fetch_assoc($resultado))           //MOSTRA OS SE DISPONIVEIS NO SELECT.
     {
       echo"<option>".$row['nome']."</option>";
      
     }
 
   
   }
   echo"<td class='text-center'><button class='btn btn-primary btn-sm' formtarget='_blank' type='submit'><font style='font-size:20px'><i class='fa fa-search'></font></button></td>";
   echo"<input type='hidden' name=COD_PED value=".$COD_PED.">";
   echo"<input type='hidden' name=COD_EMP value=".$COD_EMP.">";
   echo"<input type='hidden' name=TIPO_SEPARACAO value=".$TIPO_SEPARACAO.">";

   echo"</form>";
  
  
    echo"<form action='concluir.php' method='POST'>";
   
  
  echo"<td class='text-center'><button class='btn btn-success btn-sm' type='submit'><font style='font-size:20px'><i class='fa fa-check'></font></button></td>";
  echo"<input type='hidden' name=COD_PED value=".$COD_PED.">";
  echo"</form>";
  echo"</tr>";
    
}
} else {

}

  
?>
<!--  FIM DO PHP -->
  </tr>
        </tbody>
  </tbody>
</table>
<div id="snackbar">Carregando...<div class="spinner-border spinner-border-sm"></div>
        </div>
        </div>


      </div>


      
   <!-- The Modal -->
<div class="modal fade" id="myModalConcluir">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i>CONCLUIR SEPARACAO</i></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">

<div id="concluir_selecionado">
  <!-- VIA JS -->
</div>
      </div>
    </div>
  </div>
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

</html>

