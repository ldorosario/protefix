<div class="fadein">
<table id="myTable" class="table table-hover" >
<thead>
     <tr>
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
  
  $sql = "SELECT*FROM cadastrocliente WHERE status LIKE 'EM ANALISE' ORDER BY id DESC";
  
 $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $vendedor  = strtoupper($row['vendedor']);
    echo"<tr>";
 if($row['status']=="CONCLUIDO")
 {
   $style = "green";
 }
 elseif($row['status'] == "EM ANALISE")
 {
   $style = "red";

 }  
 elseif($row['status'] == "CONCLUIDO")
 {
   $style = "green";
 }

		echo"<td><label font style=color:".$style.">".$row['cnpj']."</label></td>";	
		echo"<td><label font style=color:".$style.">".$row['razaosocial']."</label></td>";	
		echo"<td><label font style=color:".$style.">".$vendedor."</label></td>";		
    echo"<td><label font style=color:".$style.">".$row['status']."</label></td>";	
		echo"<td><button class='btn btn-primary btn-sm' value=".$row['id']." onclick='Carrega_cliente(this)'><i class='fa fa-search-plus' style='font-size:20px'></i></button>";	
		echo"<input type=hidden name=id >";
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
</div>