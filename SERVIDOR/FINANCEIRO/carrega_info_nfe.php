<?php

include 'conexaoMysql.php';

$NUM_NOTA = $_POST['NUM_NOTA'];

$sql = "SELECT * FROM logistica_entrega WHERE NUM_NOTA LIKE '$NUM_NOTA'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{
    while($row = mysqli_fetch_assoc($resultado))
    {
        $NUM_NOTA = $row['NUM_NOTA'];
        $NUM_PEDIDO = $row['NUM_PEDIDO'];
        $MOTORISTA = $row['MOTORISTA'];
        $ASS_CANHOTO = $row['ASS_CANHOTO'];
        $NOME_CLI_FOR = $row['NOME_CLI_FOR'];

        echo"<table id='myTable' class='table table-hover' >
        <thead>
             <tr>
             <th>CLIENTE</th>
            <th >NUM NOTA</th>
              <th >NUM PEDIDO</th>
              <th >MOTORISTA</th>
              <th >ASS CANHOTO</th>
                </tr>
                <tbody>";
                
                echo"<tr>"; 
                echo"<td>".$NOME_CLI_FOR."</td>"; 
                echo"<td>".$NUM_NOTA."</td>"; 
                echo"<td>".$NUM_PEDIDO."</td>"; 
                echo"<td>".$MOTORISTA."</td>"; 
                echo"<td>".$ASS_CANHOTO."</td>"; 
                echo "</tr>";
    }

}else
{
  echo "NENHUM REGISTRO ENCONTRADO";
}


    