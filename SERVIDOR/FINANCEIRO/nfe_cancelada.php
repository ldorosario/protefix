<div class="fadein">
<button class="btn btn-primary btn-sm" data-toggle='modal' data-target='#myModalContagem'>NOVO CANCELAMENTO <i class="fa fa-plus"></i></button>
      <br>
      <br>
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
      <th class="">CLIENTE</th>
      <th class="">NF-E</th>
	  <th class="">DATA</th>
	  <th class="">SITUACAO</th>
    <th class=""></th>
    <th></th>
    </tr>
  </thead>
  <?php
include 'conexaoMysql.php';

$sql = "SELECT*FROM nfe_cancelada ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    if($row['SITUACAO'] == "CANCELADA")
{
$data_original = $row['DATA_CANCELADA']; //condicionar as colunas 
$cor = "blue";
}
else
{
$data_original = $row['DATA_EMISSAO'];
$cor = "#ff5733";
}
    
    
		echo"<tr>";
		echo"<td><font style=color:".$cor.">".$row['NOME_CLI_FOR']."</td>";
			
		
	    echo"<td><font style=color:".$cor.">".$row['NUM_NOTA']."</a></td>";
	
		//conversao de data 

$timestamp = strtotime($data_original);

$nova_data = date("d-m-Y", $timestamp);
//fim da conversao 
			echo"<td><font style=color:".$cor.">".$nova_data."</a></td>";

      echo"<td><font style=color:".$cor.">".$row['SITUACAO']."</a></td>";
  
      echo"<td><button class='btn btn-primary btn-sm' onclick='Carrega_vernfe(this)'  value=".$row['NUM_NOTA']." ><i class='fa fa-search-plus' style='font-size:20px'></i></button></td>";

      echo"<td><button class='btn btn-danger btn-sm' onclick='Proc_remove_nfe_cancelada(this)'  value=".$row['id']." ><i class='fa fa-remove' style='font-size:20px'></i></button></td>";
  
      
    
} 
}

mysqli_close($conn);
   
  ?>
  

</tbody>
</table>
</div>
</div>
</div>

</div>



<!-- The Modal -->
<div class="modal fade" id="myModalContagem">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><i>BUSCAR NFE</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                         
  <div class="input-group mb-3">
  <select id="EMPRESA" class="custom-select">
    <option selected>SELECIONAR EMPRESA</option>
    <option >PROTEFIX</option>
    <option >FICOFIX</option>
  </select>
  <div class="input-group-append">
  <input type="text" id="NUM_NOTA" class="form-control" placeholder="N°NFE"  required autofocus/>
    <button class="btn btn-primary" type="submit" onclick="Carrega_nova_nfe_cancelada()"><b><i class="fa fa-search" style="font-size:20px"></i> </b></button>
  
  </div>
</div>
</form>
        </div>
      </div>
    </div>
  </div>
  
</div>
