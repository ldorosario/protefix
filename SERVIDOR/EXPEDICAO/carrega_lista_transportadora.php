
<div class="fadein">
<button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#myModalEntrega"><b>DESPACHAR +</b></button>
<br>
<br>
<div class="span3">
<table id="myTable" class="table table-hover" >
<?php

    echo"<thead>";
    echo" <tr>";
    
    echo" <th class=>TIPO</th>";
    echo" <th class=>PEDIDO</th>";
    echo" <th class=>NOME CLIENTE</th>";
    echo" <th class=>SITUACAO</th>";
    echo" <th class=>DATA SAIDA</th>";
    echo" <th class=></th>";
 
    echo" </tr>";
    echo" </thead>";
    echo" <tbody>";

include 'conexaoMysql.php';

$sql = "SELECT*FROM LOGISTICA_ENTREGA WHERE MOTORISTA LIKE 'VIA TRANSPORTADORA'  ORDER BY id DESC LIMIT 1000";
 
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0){ //QUANDO A QUANTIDADE DE TUPLAS FOR == 1 MODELA O CSS DA TABELA PARA 100%
 
while($row = mysqli_fetch_assoc($result)){
  
  echo"<tr>";
  
    echo"<td>".$row['TIPO']."</a></td>";
    echo"<td>".$row['NUM_PEDIDO']."</a></td>";
    $NUM_PEDIDO = $row['NUM_PEDIDO'];
    echo"<td>".$row['NOME_CLI_FOR']."</a></td>";
    echo"<td>".$row['SITUACAO']."</a></td>";
    echo"<td>".$row['DATA']."</a></td>";
    if($row['SITUACAO'] == "DESPACHADO"){
      echo"<td class='text-center'><button class='btn btn-danger btn-sm' type='submit' value=".$row['id']." onclick='Processo_remove_despacho(this)'><i class='fa fa-remove'></button></td>";
  }
  
   
}
}
?>
</div>
</div>
</div>

</div>


<!-- The Modal -->
<div class="modal fade" id="myModalEntrega">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><i>DESPACHAR</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
        <div class="form-group">
    <label for="sel1">SELECIONE EMPRESA:</label>
  <select class="form-control" id="empresa_pedido">
    <option value="1">PROTEFIX</option>
    <option value="3">FICOFIX</option>
  </select>

  <div class="input-group mb-3">
          <input type="text" id="myInput_pedido" class="form-control" placeholder="N° PEDIDO"
            aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" id="botao_busca" type="submit" onclick="Carrega_entrega_despacho()"><b><i class="fa fa-search"></i> </b></button>
          </div>
        </div>

        
</div>
 
    <div id="entrega_despacho">

      <!-- Retorno via JS --> 

    </div>

  
  </div>
</div>
        </div>
      </div>
    </div>
  </div>
  
</div>
