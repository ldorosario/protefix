<?php ini_set('display_errors', 0);//ESCONDE O ERRO DO POST_PRODUTO

?>

<!DOCTYPE html>
<html lang="ptbr">

<head>

<?php header("Content-type: text/html; charset=pwx_intl850"); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <title>SEPARACAO</title>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/SERVIDOR/SCRIPTS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SERVIDOR/SCRIPTS/css/simple-sidebar.css" rel="stylesheet">

</head>
<style>
.span3 {  
    height: 600px !important;
    overflow: scroll;
}
.esquerda{float:right;}

</style>
<body>


    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
     

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
           
            <li class="nav-item">
              <a class="nav-link" href="/SERVIDOR/SEPARACAO_51/"><font style="color:red"><b>VOLTAR</b></font></a>
            </li>
          
          </ul>
        </div>
      </nav>

      <div class="container-fluid">

  
      <br>
    
 
<div class="container-fluid" >
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
      <th class="">NOME CLIENTE</th>
      <th class="">NUMERO SEPARACAO</th>
      <th class="">SEPARADOR</th>

    </tr>
  </thead>
  <?php
include 'conexaoMysql.php';

session_start();

if($_SESSION['cod_ped'] == "")
{
  $COD_PED = $_POST['COD_PED'];
}
else
{
  $COD_PED = $_SESSION['cod_ped'];
}

$sql = "SELECT*FROM logistica_separacao_fragmentada_arca WHERE  COD_PED = '$COD_PED'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo"<tr>";
 
  echo "<tr>";

   echo "<td>".$row['NOME_CLI_FOR']."</td>"; 
   echo "<td>".$row['COD_PED']."</td>"; 
   echo "<td>".$row['SEPARADOR']."</td>"; 
   
  
  
 echo "</tr>";
echo"</tbody>";
echo"</table>";
echo"<br>";

 echo"<form action='proc_conclui_separacao.php' method='POST'>";
 echo"<textarea class='form-control'  name=VOLUME rows=4 cols=150 placeholder='COLOCAR AQUI OS VOLUMES DO PEDIDO' required></textarea>";
 echo"<hr>";

 echo" <input type=hidden  name=COD_PED id=input value='".$row['COD_PED']."'>";
 echo"<button class='btn btn-success btn-sm btn-block' type='submit' name='Submit'>CONCLUIR <font style='font-size:20px'><i class='fa fa-check'></i></font></button>";
 
 
 echo"</form>";
 
 }
 
}
 
 ?>
</div>

</body>
</html>

