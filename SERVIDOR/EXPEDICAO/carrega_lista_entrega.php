
<div class="fadein">
<button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#myModalEntrega"><b>NOVO ENTREGA +</b></button>
<br>
<br>

<table id="myTable" class="table table-hover" >
<?php

    echo"<thead>";
    echo" <tr>";
    
    echo" <th class=>TIPO</th>";
    echo" <th class=>PEDIDO</th>";
    echo" <th class=>NOME CLIENTE</th>";
    echo" <th class=>MOTORISTA</th>";
    echo" <th class=>DATA SAIDA</th>";
    echo" <th class=></th>";
    echo" <th class=></th>";
 
    echo" </tr>";
    echo" </thead>";
    echo" <tbody>";

include 'conexaoMysql.php';



$sql = "SELECT*FROM logistica_entrega WHERE SITUACAO NOT LIKE 'ENTREGUE' ORDER BY id DESC LIMIT 1000";
 
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0){ //QUANDO A QUANTIDADE DE TUPLAS FOR == 1 MODELA O CSS DA TABELA PARA 100%
 
while($row = mysqli_fetch_assoc($result)){
  
  echo"<tr>";
  $MOTORISTA = strtoupper($row['MOTORISTA']); // NOME DO MOTORISTA EM UPPERCASE

    echo"<td>".$row['TIPO']."</a></td>";
    echo"<td>".$row['NUM_PEDIDO']."</a></td>";
    echo"<td>".$row['NOME_CLI_FOR']."</a></td>";
    echo"<td>".$MOTORISTA."</a></td>";
    echo"<td>".$row['DATA']."</a></td>";
    echo"<td class='text-center'><button class='btn btn-primary btn-sm' type='submit' value=".$row['NUM_PEDIDO']." onclick='Carrega_detalhe_entrega(this)'><i class='fa fa-search-plus'></button></td>";
    echo"<td class='text-center'><button class='btn btn-danger btn-sm' type='submit' value=".$row['id']." onclick='Processo_remove_entrega(this)'><i class='fa fa-remove'></button></td>";
    echo"</form>";
    echo"</tr>";


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
          <h4 class="modal-title"><i>NOVA ENTREGA</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
  
  <div class="input-group mb-3">
  <select  class="custom-select" id="select_motorista">
    <option value="SELECIONAR MOTORISTA" selected>SELECIONAR MOTORISTA</option>
     <?php 
     include 'conexaoMysql.php';
     $sql = "SELECT nome FROM motoristas ORDER BY nome ASC";
     $resultado = mysqli_query($conn, $sql);
     if(mysqli_num_rows($resultado) > 0)
     {
       while($row = mysqli_fetch_assoc($resultado))           //MOSTRA OS MOTORISTAS DISPONIVEIS NO SELECT.
       {
         echo"<option value=".$row['nome'].">".$row['nome']."</option>";
        
       }
       echo"</select>";
       mysqli_close($conn);
     }
     ?>
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit" onclick="Carrega_nova_entregas()"><b><i class="fa fa-search" style="font-size:20px"></i> </b></button>
   
  
  </div>
</div>
        </div>
      </div>
    </div>
  </div>
  
</div>


