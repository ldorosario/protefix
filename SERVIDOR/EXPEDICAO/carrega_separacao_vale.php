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




<div class="produto" id="produto">

<?php
include 'conexaoFirebird.php';

$EMPRESA = $_POST['EMPRESA'];

$COD_VALE = $_POST['COD_VALE'];

  $query = "SELECT * FROM VALES WHERE COD_VALE = $COD_VALE AND COD_EMP = $EMPRESA ";
		$data = $connect->query($query);
		
		
		foreach($data as $row){



      $TIPO_TRANSP = $row['TIPO_TRANSP'];

      if($TIPO_TRANSP == "1"){$TIPO_TRANSP ="RETIRA";}
      if($TIPO_TRANSP == "2"){$TIPO_TRANSP ="PROTEFIX";}
      if($TIPO_TRANSP == "3"){$TIPO_TRANSP ="MOTOBOY";}
      if($TIPO_TRANSP == "4"){$TIPO_TRANSP ="TRANSPORTADORA";}
      if($TIPO_TRANSP == "5"){$TIPO_TRANSP ="FICOFIX";}
      if($TIPO_TRANSP == "6"){$TIPO_TRANSP ="BALCAO";}

			echo "<td class='text-center'>".$row['NOME_CLIENTE']."</td>";
      echo "<td class='text-center'>".$row['COD_VALE']."</td>";
      echo "<td class='text-center'>".$row['USU_INCLUI']."</td>";
      echo "<td class='text-center'><button class='btn btn-success btn-sm' id='' type='submit' onclick='Proc_envia_vale()'><b><i class='fa fa-check' autofocus></i> </b></button></td>";
      echo" <input type=hidden  id=NOME_CLI_FOR_VALE id=input value='".$row['NOME_CLIENTE']."'>";
      echo" <input type=hidden  id=COD_VALE id=input value=".$row['COD_VALE'].">";
      echo" <input type=hidden  id=COD_CLI_VALE id=input value=".$row['COD_CLI'].">";
      echo" <input type=hidden  id=COD_EMP_VALE id=input value=".$row['COD_EMP'].">";
      echo" <input type=hidden  id=DT_EMISSAO_VALE id=input value=".$row['DT_EMISSAO'].">";
      echo" <input type=hidden  id=USU_INCLUI_VALE id=input value=".$row['USU_INCLUI'].">";
      echo" <input type=hidden  id=TIPO_TRANSP_VALE id=input value=".$TIPO_TRANSP.">";
			echo"
			</tr>
			</tbody>
			</table>";	
		}
		
