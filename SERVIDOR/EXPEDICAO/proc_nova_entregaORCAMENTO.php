
<?php 

include 'conexaoMysql.php';


$COD_ORC = $_POST['COD_ORC']; //NO MYSQL LIGISTICA_SEPARACAO = COD_PED
$NOME_CLI_FOR = $_POST['NOME_CLIENTE'];
if($NOME_CLI_FOR =="")
{
  $NOME_CLI_FOR = "CLIENTE S/ CADASTRO";
}
$MOTORISTA = $_POST['MOTORISTA'];
$SITUACAO ="EM ROTA";
$ASS_CANHOTO = "";
$TIPO = "ORCAMENTO";
$COD_CLI = $_POST['COD_CLI'];
$EMPRESA = $_POST['EMPRESA'];

date_default_timezone_set('America/Araguaina');
$DATA = date('d-m-y h:i:sa');



$sql ="SELECT*FROM logistica_entrega WHERE NUM_PEDIDO = '$COD_ORC'";//COMPARA COD_ORC
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0) //SE O RESULTADO FOR MAIOR QUE 0, RETORNA ERRO
{

    echo"<td><font style=color:red><b>ENTREGA JÁ REGISTRADA NO SISTEMA</b></font></td>";

}else{ //SE NAO HOUVER DADOS IGUAIS, INSERE NO BANCO


$sql="INSERT INTO logistica_entrega (NUM_PEDIDO,SITUACAO,MOTORISTA,ASS_CANHOTO,NOME_CLI_FOR,TIPO,DATA,COD_CLI)
VALUES ('$COD_ORC','$SITUACAO','$MOTORISTA','$ASS_CANHOTO','$NOME_CLI_FOR','$TIPO','$DATA','$COD_CLI')";

$result = mysqli_query($conn,$sql);

  mysqli_close($conn);


  echo"<td><font style=color:green><b>ENTREGA REGISTRADA COM SUCESSO!</b></font></td>";

}

?>
