<?php
session_start();

if(!$_SESSION['sessao'])
{
header("Location:/");
}

?>
<!DOCTYPE html>
<html lang="ptbr">
<meta charset="UTF-8">

<head>


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <title>FINANCEIRO</title>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/SERVIDOR/SCRIPTS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SERVIDOR/SCRIPTS/css/simple-sidebar.css" rel="stylesheet">
  <link href='financeiro.css' rel="stylesheet">
  <script src='financeiro.js'></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</head>

<body onload="Proc_carrega_lista_cliente()">

<div class="d-flex " id="wrapper">
  <div class="bg-light border-right " id="sidebar-wrapper">
    <div class="sidebar-heading">
      <center><b>FINANCEIRO</b> <i class='fas fa-dollar'></i></center>
    </div>
    <div class="list-group list-group-flush ">
      <center>

          <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Proc_carrega_lista_cliente()">LISTA CLIENTE</a>
          <?php 
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);  
       
        if($hostname == "Protefix08.protefix.local")
        {
         echo "  <a href='#' class='list-group-item list-group-item-action bg-light' onclick='Carrega_lista_funcionario()'>RH</a>";
        }
        else
        {

        }
          ?>
        
          <div class="dropdown">
            <button type="button" class="list-group-item list-group-item-action bg-light dropdown-toggle"
              data-toggle="dropdown"> 
              CANHOTOS
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item bg-light" href="#" onclick="Carrega_info_canhoto()">CONSULTA</a>
              <a class="dropdown-item bg-light" href="#" onclick="Carrega_modal_registro_ass_canhoto()">REGISTRO</a>
            </div>
          </div>
          <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_lista_cadastro_cliente()">CADASTRO CLIENTES LOJA/TELEVENDAS <span class="badge" id="cont_cadastro"></span></a>
          <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_lista_analise_cliente()">ANALISE DE CLIENTES <span class="badge" id="cont_analise"></span></a>
          <a href="#" class="list-group-item list-group-item-action bg-light" onclick="Carrega_nfe_cancelada()">CANCELAMENTO NF-E</a>
  
        <div class="dropdown">
          <button type="button" class="list-group-item list-group-item-action bg-light dropdown-toggle"
            data-toggle="dropdown"> 
            ENTRADAS E SAIDAS
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_itau_protefix()">ITAU PROTEFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_itau_ficofix()">ITAU FICOFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_banrisul_protefix()">BANRISUL PROTEFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_banrisul_ficofix()">BANRISUL FICOFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_brasil_protefix()">BANCO DO BRASIL PROTEFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_safra_protefix()">SAFRA PROTEFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_santander_protefix()">SANTANDER PROTEFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_sicredi_protefix()">SICREDI PROTEFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_sicredi_ficofix()">SICREDI FICOFIX</a>
            <a class="dropdown-item bg-light" href="#" onclick="Carrega_banco_caixa_protefix()">CAIXA PROTEFIX</a>
            <input type="hidden" id="ITAU_PROTEFIX" value="ITAU PROTEFIX">
            <input type="hidden" id="ITAU_FICOFIX" value="ITAU FICOFIX">
            <input type="hidden" id="BANRISUL_PROTEFIX" value="BANRISUL PROTEFIX">
            <input type="hidden" id="BANRISUL_FICOFIX" value="BANRISUL FICOFIX">
            <input type="hidden" id="BRASIL_PROTEFIX" value="BANCO DO BRASIL PROTEFIX">
            <input type="hidden" id="SAFRA_PROTEFIX" value="SAFRA PROTEFIX">
            <input type="hidden" id="SANTANDER_PROTEFIX" value="SANTANDER PROTEFIX">
            <input type="hidden" id="SICREDI_PROTEFIX" value="SICREDI PROTEFIX">
            <input type="hidden" id="SICREDI_FICOFIX" value="SICREDI FICOFIX">
            <input type="hidden" id="CAIXA_PROTEFIX" value="CAIXA PROTEFIX">
          </div>
        </div>
        <a href="/SERVIDOR/INTEGRADOR/saida.php"" class="list-group-item list-group-item-action bg-light" >SAIR</a>
      </center>
    </div>
  </div>

  <div id="page-content-wrapper">
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-light bg-light" id="menu-toggle"><b> &larr; Menu</b></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

           

          </ul>
        </div>
      </nav>

      <div class="container-fluid">

        <br> 

      <div class="input-group mb-3">
        <input type="text" name="produto" id="myInput" class="form-control" placeholder="BUSCAS...." aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus >
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit"><b><i class="fa fa-search"></i> </b></button>
        </div>
      </div>


        <div id="conteudo_selecionado" >

          <!--Conteudo via JS-->

        </div>


        <div id="snackbar">Carregando...<div class="spinner-border spinner-border-sm"></div>
        </div>


      </div>

      <script src="/SERVIDOR/SCRIPTS/vendor/jquery/jquery.min.js"></script>
      <script src="/SERVIDOR/SCRIPTS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


      <script>
        $("#menu-toggle").click(function (e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>



      </body>

</html>


<script type="text/javascript">
  $("#cnpj").focusout(function(){
         //

     
     
         //Início do Comando AJAX
         $.ajax({
           //O campo URL diz o caminho de onde virá os dados
           //É importante concatenar o valor digitado no CNPJ
           url: '/CLIENTE/FINANCEIRO/dados/cnpj.php?cnpj='+ $("#cnpj").val(),
     //Atualização: caso use java, use cnpj.jsp, usando o outro exemplo.
           //Aqui você deve preencher o tipo de dados que será lido,
           //no caso, estamos lendo JSON.
           dataType: 'json',
           //SUCESS é referente a função que será executada caso
           //ele consiga ler a fonte de dados com sucesso.
           //O parâmetro dentro da função se refere ao nome da variável
           //que você vai dar para ler esse objeto.
           success: function(resposta){
             //Confere se houve erro e o imprime
             if(resposta.status == "ERROR"){
               alert(resposta.message + "\nPor favor, digite os dados manualmente.");
               $("#post #nome").focus().select();
               return false;
             }
             //Agora basta definir os valores que você deseja preencher
             //automaticamente nos campos acima.
             $("#post #nome").val(resposta.nome);
             $("#post #fantasia").val(resposta.fantasia);
             $("#post #atividade").val(resposta.atividade_principal[0].text + " (" + resposta.atividade_principal[0].code + ")");
             $("#post #telefone").val(resposta.telefone);
             $("#post #email").val(resposta.email);
             $("#post #logradouro").val(resposta.logradouro);
             $("#post #complemento").val(resposta.complemento);
             $("#post #bairro").val(resposta.bairro);
             $("#post #cidade").val(resposta.municipio);
             $("#post #uf").val(resposta.uf);
             $("#post #cep").val(resposta.cep);
             $("#post #numero").val(resposta.numero);
           }
         });
       });
 
 
   </script>

   <!-- The Modal -->
<div class="modal fade" id="myModalInfoCanhoto">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i>BUSCAR NFE</i></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
                       

<div class="input-group-append">
<input type="text" id="NUM_NOTA" class="form-control" placeholder="N°NFE"  required autofocus/>
  <button class="btn btn-primary" type="submit" onclick="Carrega_info_ass_canhoto()"><b><i class="fa fa-search" style="font-size:20px"></i> </b></button>
</div>
</div>
<div id="nfe_selecionada">
  <!-- VIA JS -->
</div>
      </div>
    </div>
  </div>
</div>
</div>




   <!-- The Modal -->
   <div class="modal fade" id="myModalInfoCanhotoAssinatura">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><i>REGISTRAR ASSINATURA</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                         
  
  <div class="input-group-append">
  <input type="text" id="NUM_NOTA" class="form-control" placeholder="N°NFE" />
  <input type="text" id="ASSINATURA" class="form-control" placeholder="ASSINATURA"   />
    <button class="btn btn-primary" type="submit" onclick="Proc_registra_assinatura()"><b><i class="fa fa-check" style="font-size:20px"></i> </b></button>
  </div>
 
  <div id="canhoto_selecionada">
    <!-- VIA JS -->
  </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>



    <!-- The Modal -->
    <div class="modal fade" id="myModalInfoFunc">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
 
  <div id="funcionario_selecionado">
    <!-- VIA JS -->
  </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>


  

    <!-- The Modal -->
    <div class="modal fade" id="myModalFuncDocs">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
 
  <div id="documentos_funcionario_selecionado">
    <!-- VIA JS -->
  </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>





<script>
  var intervalo = setInterval(function() { $('#cont_analise').load('/SERVIDOR/FINANCEIRO/cont_analise.php'); }, 3000); //carrega pagina php e solta no title
 
 </script>
 
 <script>
  var intervalo = setInterval(function() { $('#cont_cadastro').load('/SERVIDOR/FINANCEIRO/cont_cadastro.php'); }, 3000); //carrega pagina php e solta no title
 
 </script>

 
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
  
