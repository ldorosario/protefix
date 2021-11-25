
<div class="fadein">
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
      <th class="text-center">NOME CLIENTE</th>
      <th class="text-center">NUMERO</th>
      <th class="text-center">MOTORISTA</th>
     
    </tr>
  </thead>
  <tbody>

<?php 
include 'conexaoFirebird.php';

ini_set('display_errors', 0); //ESCONDE $_GET['ERRO'] QUANDO VAZIO;


  $EMPRESA = $_POST['EMPRESA'];

  $COD_ORC = $_POST['COD_ORC'];


  $query = "SELECT * FROM ORCAMENTO WHERE COD_ORC = $COD_ORC AND COD_EMP = $EMPRESA ";
      $data = $connect->query($query);
      
      
      foreach($data as $row){
 
 
      echo "<td  class='text-center'>".$row['NOME_CLIENTE']."</td>";
      echo "<td  class='text-center'>".$row['COD_ORC']."</td>";
      echo "<td class='text-center'><button class='btn btn-success btn-sm' type='submit'  id='botao_envia_motorista_orc' onclick='Processo_envia_entrega_orcamento()'><b><i class='fa fa-check'></i></b></button></td>";
  echo" <input type=hidden  id=NOME_CLI_FOR_ORC  value='".$row['NOME_CLIENTE']."'>";
  echo" <input type=hidden  id=COD_ORC  value=".$row['COD_ORC'].">";
  echo" <input type=hidden  id=COD_CLI_ORC  value=".$row['COD_CLI'].">";
  echo" <input type=hidden  id=COD_EMP_ORC  value=".$row['COD_EMP'].">";
          echo"
  </tr>
  </tbody>
  </table>";
    
  }