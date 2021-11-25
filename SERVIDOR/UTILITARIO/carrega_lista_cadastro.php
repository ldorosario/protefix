<div class="fadein">
<center><h3><b>FINANCEIRO ESTÁ: </b><i><?php 
include 'conexaoMysql.php';
$sqlStatus = "SELECT*FROM status_cadastro";
$resultadoStatus = mysqli_query($conn, $sqlStatus);
while($row = mysqli_fetch_assoc($resultadoStatus))
{
  $status = $row['status_atual'];
  if($status == "1"){echo "<font style=color:green>ONLINE</font>";}
  if($status == "2"){echo "<font style=color:Orange>OCUPADO</font>";}
  if($status == "3"){echo "<font style=color:red>OFFLINE</font>";}
}

?> </h3></center>
  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalCadastroCliente">CADASTRO CLIENTE <i class="fa fa-user-plus"></i></button></a>
  <br>
  <br>
<div class="span3">
<table id="myTable" class="table table-hover" >
<thead>
     <tr>
	  <th class="">COD</th>
	  <th class="">CLIENTE</th>
	  <th class="">STATUS</th>
    <th class="">VENDEDOR</th>
	  <th class=""></th>

	  
		</tr>
		<tbody>
<?php

include 'conexaoMysql.php';
  date_default_timezone_set('America/Sao_Paulo');
  $data = date('d-m-Y');
    $sql = "SELECT*FROM cadastrocliente ORDER BY id DESC LIMIT 100";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
       
          if($row['status'] == "AGUARDE")
          {
            $style = "red";
          }
          
          
          
           if($row['status']=="CONCLUIDO")
           {
             $style = "blue";
           }
           elseif($row['status'] == "EM ANALISE")
           {
             $style = "orange";
           }  
           elseif($row['status'] == "LIBERADO")
           {
             $style = "green";
           }
              echo"<td><label font style=color:".$style.">".$row['codcliente']."</label></td>";	
              $razaosocial = strtoupper($row['razaosocial']);
              $vendedor = strtoupper($row['vendedor']);
              
              echo"<td><label font style=color:".$style.">".$razaosocial."</label></td>";	
        
              echo"<td><label font style=color:".$style.">".$row['status']."</label></td>";	
              
              echo"<td><label font style=color:".$style.">".$vendedor."</label></td>";		

	          	echo"</form></tr>";
		
    }
} else {

}

mysqli_close($conn);
   
  ?>
  

</tbody>
</table>
</div>
</div>

</div>





<div class="modal fade" id="myModalCadastroCliente">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
      
        <div class="modal-header">
          <h4 class="modal-title"><center></center></h4>
        </div>
         <div class="cliente_selecionado">
         <div class="container-fluid">
         <center><div id="post">
<br>
    <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">CNPJ</span>
    </div>
     <input id="cnpj" required type="text" class="form-control" name="cnpj" onblur="Carregar_cnpj()">
  </div>
   
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">RAZÃO SOCIAL</span>
    </div>
     <input id="nome" type="text"  class="form-control" name="nome">
  </div>
	
     
    <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">NOME FANTASIA</span>
    </div>
  <input id="fantasia" type="text"  class="form-control" name="fantasia">
  </div>
	
	  <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">ATIVIDADE PRINCIPAL</span>
    </div>
      <input id="atividade" type="text"  class="form-control" name="atividade">
  </div>
	
      
    <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">TELEFONE</span>
    </div>
     <input id="telefone" required type="text"  class="form-control" name="telefone">
  </div>
   
	
 <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">EMAIL CONTATO</span>
    </div>
     <input id="email" type="text"  class="form-control" name="email">
  </div>
  
  <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">EMAIL NF-E/BOLETO</span>
    </div>
     <input id="emailnfeboleto" type="text"  class="form-control" name="emailnfeboleto">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">CEP</span>
    </div>
 <input id="cep" type="text"  class="form-control" name="cep">
  </div>
  
  <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">LOGRADOURO</span>
    </div>
     <input id="logradouro" type="text"  class="form-control" name="logradouro">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">NUMERO</span>
    </div>
    <input id="numero" type="text"  class="form-control" name="numero">
  </div>
  
  <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">COMPLEMENTO</span>
    </div>
    <input id="complemento" type="text"  class="form-control" name="complemento">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">CIDADE</span>
    </div>
    <input id="cidade" type="text"  class="form-control" name="cidade">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">BAIRRO</span>
    </div>
    <input id="bairro" type="text"  class="form-control" name="bairro">
  </div>
	
	
        <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">ESTADO</span>
    </div>
        <select id="uf" class="custom-select" name="uf">
		  
	 	<option value="AC">Acre</option>
	    <option value="AL">Alagoas</option>
	    <option value="AP">Amapá</option>
	    <option value="AM">Amazonas</option>
	    <option value="BA">Bahia</option>
	    <option value="CE">Ceará</option>
	    <option value="DF">Distrito Federal</option>
	    <option value="ES">Espírito Santo</option>
	    <option value="GO">Goiás</option>
	    <option value="MA">Maranhão</option>
	    <option value="MT">Mato Grosso</option>
	    <option value="MS">Mato Grosso do Sul</option>
	    <option value="MG">Minas Gerais</option>
	    <option value="PA">Pará</option>
	    <option value="PB">Paraíba</option>
	    <option value="PR">Paraná</option>
	    <option value="PE">Pernambuco</option>
	    <option value="PI">Piauí</option>
	    <option value="RJ">Rio de Janeiro</option>
	    <option value="RN">Rio Grande do Norte</option>
	    <option value="RS">Rio Grande do Sul</option>
	    <option value="RO">Rondônia</option>
	    <option value="RR">Roraima</option>
	    <option value="SC">Santa Catarina</option>
	    <option value="SP">São Paulo</option>
	    <option value="SE">Sergipe</option>
	    <option value="TO">Tocantins</option>
          </select>
        </div>
		
		<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">COMPRA</span>
    </div>
        <select id="compra" class="custom-select"  name="compra">
		  
	 	<option>FATURADO</option>
	    <option>AVISTA</option>
		 </select>
        </div>
	<hr>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">VENDEDOR RESPONSÁVEL</span>
    </div>
    <input  type="text" id="vendedor"  class="form-control" required="required">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">CLIENTE NA LOJA</span>
    </div>
        <select id="clienteloja" class="custom-select" name="clienteloja">
		  
	 	<option>NAO</option>
	    <option>SIM</option>
		 </select>
        </div>
		
		
		<hr>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">INFO ADICIONAL</span>
    </div>
    <input  type="text" id="infoadicional"  class="form-control">
  </div>
	
	<hr>
	 <center><button class="btn btn-primary btn-block btn-sm" onclick="Proc_solicita_cadastro()">ENVIAR PEDIDO <i class="fa fa-user-plus" style="font-size:20px"></i></button></center>
<hr>


</div>
         </div>
  
     
        <div class="modal-footer">
        <center><div id="aviso_cadastro_cliente"></div></center>
        </div>
        
      </div>
    </div>
  </div>
  
</div>