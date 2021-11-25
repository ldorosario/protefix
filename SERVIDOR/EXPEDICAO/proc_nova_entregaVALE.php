
<?php 

include 'conexaoMysql.php';


$COD_VALE = $_POST['COD_VALE']; //NO MYSQL LIGISTICA_SEPARACAO = COD_PED
$NOME_CLI_FOR = $_POST['NOME_CLIENTE'];
$SITUACAO ="EM ROTA";
$ASS_CANHOTO = "";
$TIPO = "VALE";
date_default_timezone_set('America/Araguaina');
$DATA = date('d-m-y h:i:sa');
$COD_CLI = $_POST['COD_CLI'];
$MOTORISTA = $_POST['MOTORISTA'];

include 'conexaoMysql.php';
$sql ="SELECT*FROM logistica_entrega WHERE NUM_PEDIDO = '$COD_VALE'"; //COMPARA COD_VALE
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)//SE O RESULTADO FOR MAIOR QUE 0, ATUALIZA A TUPLA
{

    
 echo"<td><font style=color:red><b>ENTREGA JÁ REGISTRADA NO SISTEMA</b></font></td>";

   mysqli_close($conn);

}else{ //SE NAO HOUVER DADOS IGUAIS, INSERE NO BANCO


$sql="INSERT INTO logistica_entrega (NUM_PEDIDO,SITUACAO,MOTORISTA,ASS_CANHOTO,NOME_CLI_FOR,TIPO,DATA,COD_CLI)
VALUES ('$COD_VALE','$SITUACAO','$MOTORISTA','$ASS_CANHOTO','$NOME_CLI_FOR','$TIPO','$DATA','$COD_CLI')";
$result = mysqli_query($conn,$sql);


echo"<td><font style=color:green><b>ENTREGA REGISTRADA COM SUCESSO!</b></font></td>";


 mysqli_close($conn);


}

?>