<div class="fadein">
<table id="myTable2" class="table table-hover" >
  <thead>
    <tr>
      <th class="text-center">NUMERO</th>
      <th class="text-center">NOME CLIENTE</th>
      <th class="text-center">VENDEDOR</th>
      <th class="text-center">ENVIAR</th>
     
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
 

        $TIPO_TRANSP = $row['TIPO_TRANSP'];

      if($TIPO_TRANSP == "1"){$TIPO_TRANSP ="RETIRA";}
      if($TIPO_TRANSP == "2"){$TIPO_TRANSP ="PROTEFIX";}
      if($TIPO_TRANSP == "3"){$TIPO_TRANSP ="MOTOBOY";}
      if($TIPO_TRANSP == "4"){$TIPO_TRANSP ="TRANSPORTADORA";}
      if($TIPO_TRANSP == "5"){$TIPO_TRANSP ="FICOFIX";}
      if($TIPO_TRANSP == "6"){$TIPO_TRANSP ="BALCAO";}
 
      echo "<td  class='text-center'>".$row['NOME_CLIENTE']."</td>";
      echo "<td  class='text-center'>".$row['COD_ORC']."</td>";
      echo "<td  class='text-center'>".$row['USU_INCLUI']."</td>";
      echo "<td class='text-center'><button class='btn btn-success btn-sm' type='submit'  id='' onclick='Proc_envia_orc()'><b><i class='fa fa-check'></i></b></button></td>";
  echo" <input type=hidden  id=NOME_CLI_FOR_ORC  value='".$row['NOME_CLIENTE']."'>";
  echo" <input type=hidden  id=COD_ORC  value=".$row['COD_ORC'].">";
  echo" <input type=hidden  id=COD_CLI_ORC  value=".$row['COD_CLI'].">";
  echo" <input type=hidden  id=COD_EMP_ORC  value=".$row['COD_EMP'].">";
  echo" <input type=hidden  id=TIPO_TRANSP_ORC  value=".$TIPO_TRANSP.">";
  echo" <input type=hidden  id=USU_INCLUI_ORC  value=".$row['USU_INCLUI'].">";
  echo" <input type=hidden  id=DT_EMISSAO_ORC  value=".$row['DT_EMISSAO'].">";
          echo"
  </tr>
  </tbody>
  </table>";
    
  }