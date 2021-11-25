<div class="fadein">
    <br>
    <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">STATUS : <div id="status_selecionado"></div> </span>
    </div>
        <select id="status" class="custom-select">
	 	<option value="1" > 1-ONLINE</option>
	    <option value="2"> 2-OCUPADO</option>
        <option value="3">3-OFFLINE</option>
		 </select>
         <button class="btn btn-sm btn-primary" onclick="Proc_muda_status()">MUDAR</button>
        </div>
        <br>
        
<table id="myTable" class="table table-hover" >
<thead>
     <tr>
     <th class="">DATA CADASTRO</th>
	  <th class="">CNPJ/CPF</th>
	  <th class="">RAZÃO SOCIAL</th>
	  <th class="">VENDEDOR</th>
	   <th class="">STATUS</th>
	     <th class=""></th>
		</tr>
		<tbody>
      <?php
  include 'conexaoMysql.php';  
  date_default_timezone_set('America/Sao_Paulo');
  
  $data = date('d-m-Y');
  
  $sql = "SELECT*FROM cadastrocliente WHERE status NOT LIKE 'LIBERADO' ORDER BY status ASC";
  
 $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $vendedor  = strtoupper($row['vendedor']);
    
 $style="";
if($row['status'] == "AGUARDE")
{
    $style = "blue";
}


 if($row['status']=="CONCLUIDO")
 {
   $style = "blue";
  //  echo '<script>alert("CONCLUIR CADASTRO")</script>'; 
 }
 elseif($row['status'] == "EM ANALISE")
 {
   $style = "red";
 }  
 elseif($row['status'] == "LIBERADO")
 {
   $style = "green";
 }
 echo"<td><label font style=color:".$style.">".$row['data_cadastro']."</label></td>";	
		echo"<td><label font style=color:".$style.">".$row['cnpj']."</label></td>";	
		echo"<td><label font style=color:".$style.">".$row['razaosocial']."</label></td>";	
		echo"<td><label font style=color:".$style.">".$vendedor."</label></td>";		
    echo"<td><label font style=color:".$style.">".$row['status']."</label></td>";	
    if($row['status'] == "CONCLUIDO")
    {
  
    
      echo"<td><button class='btn btn-primary btn-sm' type='submit' value=".$row['id']."  onclick='Proc_libera_cliente(this)'><i class='fa fa-check confirma' style='font-size:20px'></i></button>";	
    }else{}
		echo"<td><button class='btn btn-primary btn-sm' type='submit' value=".$row['id']."  onclick='Carrega_cliente(this)'><i class='fa fa-search-plus' style='font-size:20px'></i></button>";	
    echo"<td><button class='btn btn-danger btn-sm' type='submit' value=".$row['id']." onclick='Proc_remove_cliente_cadastro(this)'><i class='fa fa-remove' style='font-size:20px'></button></td>";
	
		echo"</tr>";
		echo"</form>";
    }
} 

else {
	
}

mysqli_close($conn);
   
  ?>
  
  </tr>
        </tbody>
  </tbody>
</table>

</div>