
<?php 
include 'conexaoMysql.php';
include 'conexaoFirebird.php';

$NUM_NOTA = $_POST['NUM_NOTA'];
$NUM_PEDIDO = $_POST['NUM_PEDIDO']; //NO MYSQL LIGISTICA_SEPARACAO = COD_PED
$NOME_CLI_FOR = $_POST['NOME_CLI_FOR'];
$CHAVE_ACESSO = $_POST['CHAVE_ACESSO'];
$MOTORISTA = $_POST['MOTORISTA'];
$SITUACAO ="EM ROTA";
$ASS_CANHOTO = "";
$TIPO = "NF-E";
date_default_timezone_set('America/Araguaina');
$DATA = date('d-m-y h:i:sa');
$EMPRESA = $_POST['EMPRESA'];
$COD_CLI = $_POST['COD_CLI'];
$DT_EMISSAO = $_POST['DT_EMISSAO'];



 $sql ="SELECT*FROM logistica_entrega WHERE NUM_PEDIDO = '$NUM_PEDIDO'"; //COMPARA NUM_PEDIDO
 $result = mysqli_query($conn,$sql);

 if(mysqli_num_rows($result) > 0) //SE O RESULTADO FOR MAIOR QUE 0, RETORNA COM ERRO
 {
 
 echo"<td><font style=color:red><b>ENTREGA JÁ REGISTRADA NO SISTEMA</b></font></td>";


 }else{ //SE NAO HOUVER DADOS IGUAIS, INSERE NO BANCO


 $sql="INSERT INTO logistica_entrega (NUM_NOTA,NUM_PEDIDO,CHAVE_ACESSO,SITUACAO,MOTORISTA,ASS_CANHOTO,NOME_CLI_FOR,TIPO,DATA,COD_CLI,DT_EMISSAO)
 VALUES ('$NUM_NOTA','$NUM_PEDIDO','$CHAVE_ACESSO','$SITUACAO','$MOTORISTA','$ASS_CANHOTO','$NOME_CLI_FOR','$TIPO','$DATA','$COD_CLI','$DT_EMISSAO')";

 $result = mysqli_query($conn,$sql);

 echo"<td><font style=color:green><b>ENTREGA REGISTRADA COM SUCESSO!</b></font></td>";

  mysqli_close($conn);
 }

?>