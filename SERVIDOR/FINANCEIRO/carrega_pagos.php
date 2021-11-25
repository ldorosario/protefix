<div class="">
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalOperacao">NOVO REGISTRO <i class="fa fa-plus-o"></i></button>
<button class="btn btn-success btn-sm direita" onclick="Proc_retorno_banco()">EM ABERTO <i class="fa fa-search"></i></button>

<br>

<br>
<table id="myTable" class="table table-hover" >
<thead>
     <tr>
    <th class="">DATA</th>
	  <th class="">CHEQUE/LANÇAMENTO</th>
	  <th class="">PRÉ-DATADO</th>
	  <th class="">VALOR</th>
	  <th class="">BANCO</th>
    <th class="">SITUAÇÃO</th>
    <th class="">OBSERVAÇÃO</th>
    <th class=""></th>
		</tr>
		<tbody>
<?php

include 'conexaoMysql.php';


$banco = $_POST['BANCO'];
    $sql = "SELECT*FROM cheque WHERE banco LIKE '$banco' AND situacao LIKE 'PAGO' ORDER BY data DESC ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($row['marcado'] == "1")
      {
        echo"<tr class='table-warning'>";
      }
      else
      {
        echo"<tr>";
      }

     
      echo"<td>".   date('d/m/Y', strtotime($row['data'])) ."</td>";
    echo"<td>".$row['ncheque']."</td>";
    if($row['predatado'] == "")
    {
      echo "<td ></td>";
    }
    else
    {
      echo"<td>".   date('d/m/Y', strtotime($row['predatado'])) ."</td>";
    }

    echo"<td>R$ ".$row['valor']."</td>";
      
    echo"<td>".$row['banco']."</td>";
    echo"<td>".$row['situacao']."</td>";
    echo"<td>".$row['observacao']."</td>";
    echo"<input type=hidden id='id_cheque' value=".$row['id'].">";

    echo"<td><button class='btn btn-danger' value=".$row['id']." onclick='Proc_remove_registro_pago(this)'>X</button></td>";
    echo"</tr>";
	
    }
} else {

}

mysqli_close($conn);
   
  ?>
</tbody>
</table>
</div>




 <!-- O Modal -->

 
 <div class="modal fade" id="myModalOperacao">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
      
        <div class="modal-header">
          <h4 class="modal-title"><center>TIPO DE OPERAÇÃO</center></h4>
        </div>
        
      
        <div class="modal-body">
        <form action="seleciona_operacao.php" method="POST">
      <select id="sel1" class="custom-select" name="operacao">
        <option value="CHEQUE">CHEQUE</option>
        <option value="DEPOSITO">DEPOSITO</option>
        <option value="SISPAG TRANSFERENCIA">SISPAG TRANSFERENCIA</option>
        <option value="SISPAG FORNECEDOR">SISPAG FORNECEDOR</option>
        <option value="SISPAG TRIBUTOS">SISPAG TRIBUTOS</option>
        <option value="SISPAG DIVERSOS">SISPAG DIVERSOS</option>
        <option value="SISPAG SALARIOS">SISPAG SALARIOS</option>
      </select>
    </div>

     <center><button  type="submit" class="btn btn-secondary btn-sm" value="Submit" name="submit" id="botaoSalvar"><strong>PROSSEGUIR</button></center>
        <br>
        </form>
        
     
        <div class="modal-footer">
          
        </div>
        
      </div>
    </div>
  </div>
  
</div>
