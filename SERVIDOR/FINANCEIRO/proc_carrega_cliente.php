<div class="fadein">
  <?php
 include 'conexaoMysql.php';

 $id = $_POST['id'];

$sql = "SELECT*FROM cadastrocliente WHERE id like '$id'";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {


   echo"<div class='container'>";
   echo "<center>";

    echo" <a data-toggle=modal href=#myModalCNPJ><button class='btn btn-sm btn-primary'>CNPJ <i class='fa fa-upload'></i></button></a>";
   if($row['pdfcnpj'] == ""){}else{
    echo"<a  target='_blank' href='".$row['pdfcnpj']."'><button class='btn btn-sm btn-warning'>VER <i class='fa fa-eye'></i></button></a>";
   }

  echo" <a data-toggle=modal href=#myModalIE><button class='btn btn-sm btn-primary'>IE <i class='fa fa-upload'></i></button></a>";
  if($row['pdfie'] == ""){}else{
  echo"<a  target='_blank' href='".$row['pdfie']."'><button class='btn btn-sm btn-warning'>VER <i class='fa fa-eye'></i></button></a>";
 }

 echo"<a data-toggle=modal href=#myModalSERASA><button class='btn btn-sm btn-primary'>SERASA <i class='fa fa-upload'></i></button></a>";
 if($row['pdfserasa']==""){}else{
 echo"<a  target='_blank' href='".$row['pdfserasa']."'><button class='btn btn-sm btn-warning'>VER <i class='fa fa-eye'></i></button></a>";
 }

 echo"<a data-toggle=modal href=#myModalFICHACADASTRAL><button class='btn btn-sm btn-primary'>FICHA <i class='fa fa-upload'></i></button></a>";
 if($row['pdffichacadastral']==""){}else{
 echo"<a  'target=_blank' href='".$row['pdffichacadastral']."'><button class='btn btn-sm btn-warning'>VER <i class='fa fa-eye'></i></button></a>";
}


echo"<a data-toggle=modal href=#myModalCONTRATOSOCIAL> <button class='btn btn-sm btn-primary'>C SOCIAL<i class='fa fa-upload'></i></button></a>";
if($row['pdfcontratosocial'] ==""){}else{
echo"<a 'target=_blank' href='".$row['pdfcontratosocial']."' ><button class='btn btn-sm btn-warning'>VER <i class='fa fa-eye'></i></button></a>";
}

echo"<a data-toggle=modal href=#myModalSERASANOVO> <button class='btn btn-sm btn-primary'>SERASA NOVO <i class='fa fa-upload'></i></button></a>";
if($row['pdfserasanovo'] ==""){}else{
echo"<a target='_blank' href='".$row['pdfserasanovo']."' ><button class='btn btn-sm btn-warning'>VER <i class='fa fa-eye'></i></button></a>";
}

 echo"</center>";
echo" </div>";

echo"<br>";


echo"<div class=panel-body>";

  echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>CNPJ/CPF</span>";
  echo"</div>";
  echo"<input type=text class=form-control  id=cnpj value='".$row['cnpj']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>RAZÃO SOCIAL</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=nome value='".$row['razaosocial']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>NOME FANTASIA</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=fantasia value='".$row['fantasia']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>TELEFONE</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=telefone value='".$row['telefone']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>EMAIL</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=email value='".$row['email']."'>";
echo" </div>";


echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>EMAIL NF-E/BOLETO</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=emailnfeboleto value='".$row['emailnfeboleto']."'>";
echo" </div>";


echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>LOGRADOURO</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=logradouro value='".$row['logradouro']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>NUMERO</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=numero value='".$row['numero']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>COMPLEMENTO</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=complemento value='".$row['complemento']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>CIDADE</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=cidade value='".$row['cidade']."'>";
echo" </div>";



echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>BAIRRO</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=bairro value='".$row['bairro']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
 echo"  <div class=input-group-prepend>";
   echo"  <span class=input-group-text>UF</span>";
echo"  </div>";
      echo"  <select class=custom-select id=uf value=".$row['uf'].">";
    echo"<option>".$row['uf']."</option>";
    echo"<option></option>";
    echo"<option value=AC>ACRE</option>";
    echo"<option value=AL>ALAGOAS</option>";
    echo"<option value=AP>AMAPA</option>";
    echo"<option value=AM>AMAZONAS</option>";
    echo"<option value=BA>BAHIA</option>";
    echo"<option value=CE>CEARA</option>";
    echo"<option value=DF>DISTRITO FEDERAL</option>";
    echo"<option value=ES>ESPIRITO SANTO</option>";
    echo"<option value=GO>GOIAS</option>";
    echo"<option value=MA>MARANHAO</option>";
    echo"<option value=MT>MATO GROSSO</option>";
    echo"<option value=MS>MATO GROSSO DO SUL</option>";
    echo"<option value=MG>MINAS GERAIS</option>";
    echo"<option value=PA>PARA</option>";
    echo"<option value=PB>PARAIBA</option>";
    echo"<option value=PR>PARANA</option>";
    echo"<option value=PE>PERNAMBUCO</option>";
    echo"<option value=PI>PIAUI</option>";
    echo"<option value=RJ>RIO DE JANEIRO</option>";
    echo"<option value=RN>RIO GRANDE DO NORTE</option>";
    echo"<option value=RS>RIO GRANDE DO SUL</option>";
    echo"<option value=RO>RONDONIA</option>";
    echo"<option value=RR>RORAIMA</option>";
    echo"<option value=SC>SANTA CATARINA</option>";
    echo"<option value=SP>SAO PAULO</option>";
    echo"<option value=SE>SERGIPE</option>";
    echo"<option value=TO>TOCANTINS</option>";
    
       echo" </select>";
     echo" </div> "; 

echo"<div class=input-group mb-3 input-group-sm>";
 echo"  <div class=input-group-prepend>";
   echo"  <span class=input-group-text>COMPRA</span>";
echo"  </div>";
      echo"  <select class=custom-select id=compra value=".$row['compra'].">";
    echo"<option>".$row['compra']."</option>";
    echo"<option></option>";
    echo"<option>FATURADO</option>";
    echo"<option>AVISTA</option>";
      echo" </select>";
     echo" </div> "; 

     echo"<br>";
     echo"<hr>";
     echo "<br>";

echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>VENDEDOR</span>";
  echo"</div>";
  $vendedor = strtoupper($row['vendedor']);
  echo"<input type=text class=form-control id=vendedor value='".$vendedor."'>";
echo" </div>";



echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>COD CLIENTE</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=codcliente value='".$row['codcliente']."'>";
echo" </div>";

echo"<div class=input-group mb-3 input-group-sm>";
 echo"  <div class=input-group-prepend>";
   echo"  <span class=input-group-text>STATUS</span>";
echo"  </div>";
      echo"  <select  class=custom-select id=status value=".$row['status'].">";
    echo"<option>".$row['status']."</option>";
    echo"<option></option>";
    echo"<option>AGUARDE</option>";
    echo"<option>EM ANALISE</option>";
    echo"<option>CONCLUIDO</option>";
    echo"<option>LIBERADO</option>";
           echo" </select>";
     echo" </div> ";
   
   
   echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>LIMITE CRÉDITO</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=limitecredito value='".$row['limitecredito']."'>";
echo" </div>";


echo"<div class=input-group mb-3 input-group-sm>";
   echo"<div class=input-group-prepend>";
    echo" <span class=input-group-text>INFO ADICIONAL</span>";
  echo"</div>";
  echo"<input type=text class=form-control id=infoadicional value='".$row['infoadicional']."'>";
echo" </div>";


echo"<div class=input-group mb-3 input-group-sm>";
echo"<div class=input-group-prepend>";
echo" <span class=input-group-text>DATA DO CADASTRO</span>";
echo"</div>";
echo"<input type=text class=form-control id=data_cadastro value='".$row['data_cadastro']."'>";
echo" </div>";

      echo"<hr>";
      echo"<input type=hidden id=id value=".$row['id'].">";
      echo" </div>";
      

 echo"<center><button type='submit' class='btn btn-success btn-block' value='Submit'onclick='Proc_atualiza_cliente()'>ATUALIZAR <i class='fa fa-refresh'></i></button></center>";
 echo"<hr>";
 

echo"</div>";



//modal abaixo


echo"<div class=modal fade id=myModalCNPJ role=dialog>";
  echo"<div class=modal-dialog modal-xm>";
  
 
    echo"<div class=modal-content>";
      echo"<div class=modal-header>";
        echo"<div class=container id=modalcontainer>";
             
          echo"<form target='_blank' action=/mobile/financeiro/proc_upload.php method=post enctype=multipart/form-data>";
        echo"Selecione o arquivo: <input type=file class=form-control name=arquivo />";
            echo"<input type=hidden value=pdfcnpj/ name=dir>";
      echo"<input type=hidden value=".$row['id']." name=id>";
 echo"<center><button  type=submit class=btn btn-success btn-block  name=submit value=".$row['id']." onclick='Carrega_cliente(this)'><strong>ENVIAR</button></center>";
echo"<hr>";

 
echo"</form>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";



echo"<div class=modal fade id=myModalIE role=dialog>";
  echo"<div class=modal-dialog modal-xm>";
  
 
    echo"<div class=modal-content>";
      echo"<div class=modal-header>";
        echo"<div class=container id=modalcontainer>";
             
          echo"<form target='_blank' action=/mobile/financeiro/proc_uploadie.php method=post enctype=multipart/form-data>";
        echo"Selecione o arquivo: <input type=file class=form-control name=arquivo />";
            echo"<input type=hidden value=pdfie/ name=dir>";
      echo"<input type=hidden value=".$row['id']." name=id>";
 echo"<center><button  type=submit class=btn btn-success btn-block  name=submit value=".$row['id']." onclick='Carrega_cliente(this)'><strong>ENVIAR</button></center>";
echo"<hr>";

 
echo"</form>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";


echo"<div class=modal fade id=myModalSERASA role=dialog>";
  echo"<div class=modal-dialog modal-xm>";
  
 
    echo"<div class=modal-content>";
      echo"<div class=modal-header>";
        echo"<div class=container id=modalcontainer>";
             
          echo"<form target='_blank' action=/mobile/financeiro/proc_uploadserasa.php method=post enctype=multipart/form-data>";
        echo"Selecione o arquivo: <input type=file class=form-control name=arquivo />";
            echo"<input type=hidden value=pdfserasa/ name=dir>";
      echo"<input type=hidden value=".$row['id']." name=id>";
 echo"<center><button  type=submit class=btn btn-success btn-block name=submit value=".$row['id']." onclick='Carrega_cliente(this)'><strong>ENVIAR</button></center>";
echo"<hr>";

 
echo"</form>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";


echo"<div class=modal fade id=myModalFICHACADASTRAL role=dialog>";
  echo"<div class=modal-dialog modal-xm>";
  
 
    echo"<div class=modal-content>";
      echo"<div class=modal-header>";
        echo"<div class=container id=modalcontainer>";
             
          echo"<form target='_blank' action=/mobile/financeiro/proc_uploadfichacadastral.php method=post enctype=multipart/form-data>";
        echo"Selecione o arquivo: <input type=file class=form-control name=arquivo />";
            echo"<input type=hidden value=pdffichacadastral/ name=dir>";
      echo"<input type=hidden value=".$row['id']." name=id>";
 echo"<center><button  type=submit class=btn btn-success btn-block name=submit value=".$row['id']." onclick='Carrega_cliente(this)'><strong>ENVIAR</button></center>";
echo"<hr>";

 
echo"</form>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";



echo"<div class=modal fade id=myModalCONTRATOSOCIAL role=dialog>";
  echo"<div class=modal-dialog modal-xm>";
  
 
    echo"<div class=modal-content>";
      echo"<div class=modal-header>";
        echo"<div class=container id=modalcontainer>";
             
          echo"<form target='_blank' action=/mobile/financeiro/proc_uploadcontratosocial.php method=post enctype=multipart/form-data>";
        echo"Selecione o arquivo: <input type=file class=form-control name=arquivo />";
            echo"<input type=hidden value=pdfcontratosocial/ name=dir>";
      echo"<input type=hidden value=".$row['id']." name=id>";
      echo"<center><button  type=submit class=btn btn-success btn-block name=submit value=".$row['id']." onclick='Carrega_cliente(this)'><strong>ENVIAR</button></center>";

      echo"<hr>";

    
      
echo"</form>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";





echo"<div class=modal fade id=myModalSERASANOVO role=dialog>";
  echo"<div class=modal-dialog modal-xm>";
  
 
    echo"<div class=modal-content>";
      echo"<div class=modal-header>";
        echo"<div class=container id=modalcontainer>";
             
          echo"<form target='_blank' action=/mobile/financeiro/proc_uploadserasanovo.php method=post enctype=multipart/form-data>";
        echo"Selecione o arquivo: <input type=file class=form-control name=arquivo />";
            echo"<input type=hidden value=pdfserasanovo/ name=dir>";
      echo"<input type=hidden value=".$row['id']." name=id>";
      echo"<center><button  type=submit class=btn btn-success btn-block name=submit value=".$row['id']." onclick='Carrega_cliente(this)'><strong>ENVIAR</button></center>";

      echo"<hr>";

    
      
echo"</form>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";


  }
} else {

}

mysqli_close($conn);
 
?>
</div>
</div>
</div>
