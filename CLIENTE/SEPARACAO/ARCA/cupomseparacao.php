

<style>
 

  
 .text-center {
  text-align: center;
}
.ttu {
  text-transform: uppercase;
}
.printer-ticket {
  display: table !important;
  width: 100%;
  max-width: 400px;
  font-weight: light;
  line-height: 1.0em;
}
.printer-ticket,
.printer-ticket * {
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 9px;
}
.printer-ticket th:nth-child(2),
.printer-ticket td:nth-child(2) {
  width: 50px;
}
.printer-ticket th:nth-child(3),
.printer-ticket td:nth-child(3) {
  width: 90px;
  text-align: right;
}
.printer-ticket th {
  font-weight: inherit;
  padding: 10px 0;
  text-align: center;
  border-bottom: 1px dashed #BCBCBC;
}
.printer-ticket tbody tr:last-child td {
  padding-bottom: 10px;
}
.printer-ticket tfoot .sup td {
  padding: 10px 0;
  border-top: 1px dashed #BCBCBC;
}
.printer-ticket tfoot .sup.p--0 td {
  padding-bottom: 0;
}
.printer-ticket .title {
  font-size: 1.5em;
  padding: 15px 0;
}
.printer-ticket .top td {
  padding-top: 10px;
}
.printer-ticket .last td {
  padding-bottom: 10px;
}
#titulo
{
  background-color:black;
  
  }
</style>
<!DOCTYPE html>
<html lang="pt-br" >


<script type="text/javascript">
    function PrintWindow() {                    
       window.print();            //ABRE O PAGINA DE IMPRESSAO
       CheckWindowState();
    }

    function CheckWindowState()    {           
        if(document.readyState=="complete") {
            window.close(); 
        } else {           
            setTimeout("CheckWindowState()", 2000)
        }
    }
    PrintWindow();
</script> 

<script type="text/javascript"> 
window.onload=function(){self.print();} 
</script> 





<head>
<?php header("Content-type: text/html; charset=pwx_intl850"); ?>
  <title>CUPOM SEPARACAO</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="codigodebarras.js">
  <link href='area51.css' rel="stylesheet">

  
  



</head>
<?php
 include 'conexaoMysql.php';

include 'conexaoFirebird.php';

$SEPARADOR = $_GET['SEPARADOR'];
$COD_PED = $_GET['COD_PED'];
$TIPO_SEPARACAO = $_GET['TIPO_SEPARACAO'];
$COD_EMP = $_GET['COD_EMP'];



if($TIPO_SEPARACAO == "PEDIDO")
{
  $query = "SELECT CLI_FOR.COD_CLI_FOR, PEDIDOS.COD_CLI,PEDIDOS.USU_INCLUI, CLI_FOR.NOME_CLI_FOR,PEDIDOS.COD_EMP,PEDIDOS.COD_PED,PEDIDOS.TIPO_TRANSP,PEDIDOS.DT_EMISSAO FROM PEDIDOS INNER JOIN CLI_FOR ON (CLI_FOR.COD_CLI_FOR = PEDIDOS.COD_CLI)
  WHERE PEDIDOS.COD_PED = $COD_PED AND PEDIDOS.COD_EMP = $COD_EMP";
 
 $data = $connect->query($query);
 
 foreach($data as $row){
 
   $TIPO_TRANSP = $row['TIPO_TRANSP'];
 
   if($TIPO_TRANSP == "1"){$TIPO_TRANSP ="RETIRA";}
   if($TIPO_TRANSP == "2"){$TIPO_TRANSP ="PROTEFIX";}
   if($TIPO_TRANSP == "3"){$TIPO_TRANSP ="MOTOBOY";}
   if($TIPO_TRANSP == "4"){$TIPO_TRANSP ="TRANSPORTADORA";}
   if($TIPO_TRANSP == "5"){$TIPO_TRANSP ="FICOFIX";}
   if($TIPO_TRANSP == "6"){$TIPO_TRANSP ="BALCAO";}
  
   $NOME = $row['NOME_CLI_FOR'];
   $N_SEPARACAO = $row['COD_PED'];
   $VENDEDOR = $row['USU_INCLUI'];
   
 
 }
}
elseif($TIPO_SEPARACAO == "ORCAMENTO")
{
  $query = "SELECT * FROM ORCAMENTO WHERE COD_ORC = $COD_PED AND COD_EMP = $COD_EMP ";
 
 $data = $connect->query($query);
 
 foreach($data as $row){
 
   $TIPO_TRANSP = $row['TIPO_TRANSP'];
 
   if($TIPO_TRANSP == "1"){$TIPO_TRANSP ="RETIRA";}
   if($TIPO_TRANSP == "2"){$TIPO_TRANSP ="PROTEFIX";}
   if($TIPO_TRANSP == "3"){$TIPO_TRANSP ="MOTOBOY";}
   if($TIPO_TRANSP == "4"){$TIPO_TRANSP ="TRANSPORTADORA";}
   if($TIPO_TRANSP == "5"){$TIPO_TRANSP ="FICOFIX";}
   if($TIPO_TRANSP == "6"){$TIPO_TRANSP ="BALCAO";}
  
   $NOME = $row['NOME_CLIENTE'];
   $N_SEPARACAO = $row['COD_ORC'];
   $VENDEDOR = $row['USU_INCLUI'];
   
 
 }
}
elseif($TIPO_SEPARACAO == "VALE")
{
  $query = "SELECT * FROM VALES WHERE COD_VALE = $COD_PED AND COD_EMP = $COD_EMP ";
 
 $data = $connect->query($query);
 
 foreach($data as $row){
 
   $TIPO_TRANSP = $row['TIPO_TRANSP'];
 
   if($TIPO_TRANSP == "1"){$TIPO_TRANSP ="RETIRA";}
   if($TIPO_TRANSP == "2"){$TIPO_TRANSP ="PROTEFIX";}
   if($TIPO_TRANSP == "3"){$TIPO_TRANSP ="MOTOBOY";}
   if($TIPO_TRANSP == "4"){$TIPO_TRANSP ="TRANSPORTADORA";}
   if($TIPO_TRANSP == "5"){$TIPO_TRANSP ="FICOFIX";}
   if($TIPO_TRANSP == "6"){$TIPO_TRANSP ="BALCAO";}
  
   $NOME = $row['NOME_CLIENTE'];
   $N_SEPARACAO = $row['COD_VALE'];
   $VENDEDOR = $row['USU_INCLUI'];
   
 
 }
}

?>

<body onload="function(){self.print();}">
<center>

<div class="container"  id="">
<?php
date_default_timezone_set('America/Araguaina');
echo $data = date("d/m/Y h:i:sa"); ?> </b>
</div>
<br>
<br>

<div class="container"  id="">
<b><b>ARCA </b></font></b>
</div>
  <table class="printer-ticket">
 	<thead>
		</tr>
		<tr>
			<th colspan="3">
				<h2><b>CLIENTE: <?php echo $NOME; ?> </b><br /></h2>
				
			</th>
		</tr>
		<tr>
			<th class="ttu" colspan="3">
				<h2><b><?php echo $TIPO_SEPARACAO;?> : <?php echo $N_SEPARACAO;?></b></h2>
             
			</th>
		</tr>

    <tr>
			<th class="ttu" colspan="3">
				<h2><b>VENDEDOR: <?php echo $VENDEDOR;?> </b></h2>
             
			</th>
		</tr>

    <tr>
			<th class="ttu" colspan="3">
				<h2><b>SEPARADOR: <?php echo $SEPARADOR; ?></b></h2>
             
			</th>
		</tr>


    <tr>
			<th class="ttu" colspan="3">
			<div class="container"  id="">
      <b><b><?php echo $TIPO_TRANSP;  ?></b></b>
</div>
			</th>
		</tr>

    

	</thead>

	<tbody>
  


    <?php

    $tamanho = strlen($COD_PED);

    if($TIPO_SEPARACAO == "PEDIDO"){ //SE O PEDIDO FOR PROTEFIX
    $query = "SELECT ITEMS_PEDIDO.COD_PED, ITEMS_PEDIDO.COD_PROD,ITEMS_PEDIDO.COD_EMP,ITEMS_PEDIDO.VALOR,
    ITEMS_PEDIDO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,PRODUTOS.UNIDADE,ITEMS_PEDIDO.OBS, PRODUTOS.LOCAL_ALMOX,
    ITEMS_PEDIDO.ITEM
    FROM ITEMS_PEDIDO  
    INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_PEDIDO.COD_PROD)
    WHERE COD_PED = $COD_PED AND ITEMS_PEDIDO.COD_EMP = $COD_EMP AND PRODUTOS.LOCAL_ALMOX = 'ARCA' ORDER BY ITEMS_PEDIDO.ITEM ASC
    ";
    

    
    
    $data = $connect->query($query);
    foreach($data as $row){
   
      $VALOR = $row['VALOR'];
      $QTD_PEDIDA = $row['QTDE_PED'];

      $valor_total = $VALOR * $QTD_PEDIDA;

echo"
<tr class=top>
			<td colspan=3><b>ITEM ".$row['ITEM']."</b></td>
    </tr>
    
		<tr class=top>
			<td colspan=3><b>".$row['NOME_PROD']."</b></td>
    </tr>
    
		<tr>
			<td>QUANTIDADE</td>
			<td>".$row['QTDE_PED']." ".$row['UNIDADE']." Uni = R$ ".$row['VALOR']." TOTAL = R$ ".number_format($valor_total, 2, ',', '.')."</td>
    </tr>
    
		<tr>
            <td colspan=3>OBS:</td> 
		</tr>
		<tr>
            <td><b>".$row['OBS']."</td>
		</tr>
	</tbody>
    <tfoot>
   
    ";
    
    }
  }
   

      elseif($TIPO_SEPARACAO == "ORCAMENTO"){ //SE FOR ORÇAMENTO
        $query = "SELECT ITEMS_ORCAMENTO.COD_ORC, ITEMS_ORCAMENTO.COD_PROD,PRODUTOS.LOCAL_ALMOX,PRODUTOS.UNIDADE,ITEMS_ORCAMENTO.VALOR,
        ITEMS_ORCAMENTO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_ORCAMENTO.OBS, ITEMS_ORCAMENTO.COD_EMP
        FROM ITEMS_ORCAMENTO  
        INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_ORCAMENTO.COD_PROD)
        WHERE COD_ORC = $COD_PED AND ITEMS_ORCAMENTO.COD_EMP = $COD_EMP  AND PRODUTOS.LOCAL_ALMOX LIKE 'ARCA'";
        
        
        $data = $connect->query($query);
        foreach($data as $row){

          $VALOR = $row['VALOR'];
        $QTD_PEDIDA = $row['QTDE_PED'];
  
        $valor_total = $VALOR * $QTD_PEDIDA;

    echo"
        <tr class=top>
          <td colspan=3><b>".$row['NOME_PROD']."</b></td>
        </tr>
        <tr>
          <td>QUANTIDADE</td>
          <td>".$row['QTDE_PED']." ".$row['UNIDADE']." Uni = R$ ".$row['VALOR']." TOTAL = R$ ".number_format($valor_total, 2, ',', '.')."</td>
        
          
        </tr>
        <tr>
                <td colspan=3>OBS:</td>
                
        </tr>
        <tr>
                <td><b>".$row['OBS']."</td>
        </tr>
      </tbody>
        <tfoot>
       
        ";
        
        }
      }

        if($TIPO_SEPARACAO == "VALE"){ //SE  PEDIDO FOR VALE
          $query = "SELECT ITEMS_VALE.COD_VALE, ITEMS_VALE.COD_PROD,ITEMS_VALE.COD_EMP,
          PRODUTOS.NOME_PROD,PRODUTOS.COD_PROD,ITEMS_VALE.OBS, PRODUTOS.LOCAL_ALMOX,ITEMS_VALE.QTDE_PED
          FROM ITEMS_VALE  
          INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_VALE.COD_PROD)
          WHERE COD_VALE = $COD_PED AND ITEMS_VALE.COD_EMP = $COD_EMP AND PRODUTOS.LOCAL_ALMOX LIKE 'ARCA'";
          
          
          
          $data = $connect->query($query);
          foreach($data as $row){
      echo"
          <tr class=top>
            <td colspan=3><b>".$row['NOME_PROD']."</b></td>
          </tr>
          <tr>
            <td>QUANTIDADE</td>
            <td>".$row['QTDE_PED']."</td>
            
          </tr>
          <tr>
                  <td colspan=3>OBS:</td>
                  
          </tr>
          <tr>
                  <td><b>".$row['OBS']."</td>
          </tr>
        </tbody>
          <tfoot>
         
          ";
          
          }
        }
      
    
  
?>
	</tfoot>
</table>

<br>

<br>
<br>

<center><b> OBSERVACAO INTERNA </b></center>
<?php

if($TIPO_SEPARACAO == "PEDIDO"){ //SE O PEDIDO FOR PROTEFIX
  $query = "SELECT OBS_INTERNA FROM PEDIDOS WHERE COD_PED = $COD_PED AND COD_EMP = $COD_EMP
  ";
  

  
  
  $data = $connect->query($query);
  foreach($data as $row){
    

echo"
<tr class=top>
    <td colspan=3><b>".$row['OBS_INTERNA']."</td>
  </tr>

  ";
  
  }
}

?>


<br>
<br>
<img alt="cod_barras_separacao" src="barcode.php?text=<?php echo $COD_PED; ?>"/>
<p><?php echo $COD_PED; ?></p>

</body>

</html>




