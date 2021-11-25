

<?php
include 'conexaoMysql.php';
ini_set('display_errors', 0); // esconde erro na liha 04

  $id_entrada_funcionario = $_POST['id_entrada_funcionario'];

  
 
$sql = "SELECT*FROM rh_registro_empregado WHERE id = '$id_entrada_funcionario'";

$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado)>0)
{
   while($row = mysqli_fetch_assoc($resultado))
   {
     $id_funcionario = $row['id'];
     $nome = $row['nome'];
     $nome_pai = $row['nome_pai'];
     $nome_mae = $row['nome_mae'];
     $data_nascimento = $row['data_nascimento'];
     $tel_fixo = $row['tel_fixo'];
     $tel_celular = $row['tel_celular'];
     $cod_funcionario = $row['cod_funcionario'];
     $sexo = $row['sexo'];
     $estado_civil = $row['estado_civil'];
     $cor_raca = $row['cor_raca'];
     $naturalidade = $row['naturalidade'];
     $nacionalidade = $row['nacionalidade']; 
     $endereco = $row['endereco'];
     $bairro = $row['bairro'];
     $cep = $row['cep'];
     $municipio = $row['municipio'];
     $cpf = $row['cpf'];
     $rg = $row['rg']; 
     $orgao = $row['orgao'];
     $estado = $row['estado'];
     $emissao_rg = $row['emissao_rg'];
     $numero_ctps = $row['numero_ctps'];
     $serie_ctps = $row['serie_ctps'];
     $estado_ctps = $row['estado_ctps'];
     $expedicao_ctps = $row['expedicao_ctps'];
     $pis = $row['pis'];
     $cadastro_pis = $row['cadastro_pis'];
     $instrucao = $row['instrucao'];
     $cnh = $row['cnh'];
     $categoria_cnh = $row['categoria_cnh'];
     $validade_cnh = $row['validade_cnh'];
     $reserva = $row['reserva'];
     $categoria = $row['categoria'];
     $titulo_eleitoral = $row['titulo_eleitoral'];
     $zona = $row['zona'];
     $secao = $row['secao'];
     $banco = $row['banco'];
     $conta = $row['conta'];
     $digito = $row['digito'];
     $agencia = $row['agencia'];
     $sindicato = $row['sindicato'];
     $const_profis = $row['const_profis'];
     $registro_profis = $row['registro_profis'];
     $data_registro = $row['data_registro'];
     $data_chegada = $row['data_chegada'];
     $tipo_visto = $row['tipo_visto'];
     $carteira_rne = $row['carteira_rne'];
     $validade_rne = $row['validade_rne'];
     $numero_portaria = $row['numero_portaria'];
     $data_portaria = $row['data_portaria'];
     $admissao = $row['admissao'];
     $optante_fgts = $row['optante_fgts'];
     $data_opcao = $row['data_opcao'];
     $conta_fgts = $row['conta_fgts'];
     $cargo = $row['cargo'];
     $organograma = $row['organograma'];
     $remuneracao = $row['remuneracao'];
     $cbo = $row['cbo'];
     $modo_pagamento = $row['modo_pagamento'];
     $periodo = $row['periodo'];
     $escala = $row['escala'];
     $empresa = $row['empresa'];

}

}
else
{echo "404";}


?>
<style>
  img{
  max-width:200px;
  max-height:200px;
  width:auto;
  height:auto;
  }
  </style>
<div class="container-fluid x">

<hr>
<h4 id="dados_empregado"><b>DADOS DO EMPREGADO</b>

<button class="btn btn-sm btn-secondary direita no-print" onclick="Proc_carrega_doc_funcionario()"><b>VER DOCUMENTOS</b></button>

 
<a data-toggle="modal" href="#myModalDocumentos">
 <button class="btn btn-sm btn-secondary direita no-print"><b>ADICIONAR DOCUMENTOS</b></button>
 </a>

 <a data-toggle="modal" href="#myModal">
 <button class="btn btn-sm btn-secondary direita no-print"><b>ADICIONAR FAMILIAR</b></button>
 </a>
 </h4>
<hr>
<!--<img src="/SERVIDOR/FINANCEIRO/DOCUMENTOS/sem_foto.png" class="img-thumbnail" onclick="Modal_up_foto()"> -->

<form action="/SERVIDOR/FINANCEIRO/proc_atualiza_funcionario.php" method="POST" target="_blank">
<hr>
<div class="form-group">
  <label for="sel1">EMPRESA:</label>
  <select class="form-control" name="empresa">
    <option><?php echo $empresa; ?></option>
    <option>---------------------</option>
    <option>PROTEFIX</option>
    <option>FICOFIX</option>
  </select>
</div>
<hr>
<div class="input-group mb-1">

    <div class="input-group-prepend">
      <span class="input-group-text">Nome</span>
    </div>
    <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Pai</span>
    </div>
    <input type="text" class="form-control" name="nome_pai" value="<?php echo $nome_pai; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Mãe</span>
    </div>
    <input type="text" class="form-control" name="nome_mae" value="<?php echo $nome_mae; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Nascimento</span>
    </div>
    <input type="date" class="form-control" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
  </div>
 <!-- CASCATA ABAIXO -->
 <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Telefone Fixo</span>
    </div>
    <input type="text" class="form-control" name="tel_fixo" value ="<?php echo $tel_fixo; ?>" />
    <div class="input-group-prepend">
      <span class="input-group-text">Telefone Celular</span>
    </div>
    <input type="text" class="form-control" name="tel_celular" value="<?php echo $tel_celular; ?>" />
  </div>

  <!-- FIM CASCATA -->

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Código Funcionário</span>
    </div>
    <input type="text" class="form-control" name="cod_funcionario" value="<?php echo $cod_funcionario; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Sexo</span>
    </div>
    <input type="text" class="form-control" name="sexo" value="<?php echo $sexo; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Estado Civil</span>
    </div>
    <input type="text" class="form-control" name="estado_civil" value="<?php echo $estado_civil; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Cor/Raça</span>
    </div>
    <input type="text" class="form-control" name="cor_raca" value="<?php echo $cor_raca; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Nacionalidade</span>
    </div>
    <input type="text" class="form-control" name="nacionalidade" value="<?php echo $nacionalidade; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Endereço</span>
    </div>
    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>">
  </div>
  <!-- CASCATA ABAIXO -->
  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Bairo</span>
    </div>
    <input type="text" class="form-control" name="bairro" value="<?php echo $bairro; ?>">
    
    <div class="input-group-prepend">
      <span class="input-group-text">CEP</span>
    </div>
    <input type="text" class="form-control" name="cep" value="<?php echo $cep; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Municipio</span>
    </div>
    <input type="text" class="form-control" name="municipio" value="<?php echo $municipio; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Naturalidade</span>
    </div>
    <input type="text" class="form-control" name="naturalidade" value="<?php echo $naturalidade; ?>">
  </div>
  
<!--FIM DA CASCATA -->
   
  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">CPF</span>
    </div>
    <input type="text" class="form-control" name="cpf" value="<?php echo $cpf; ?>">
  </div>

   <!-- CASCATA ABAIXO -->
  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">RG</span>
    </div>
    <input type="text" class="form-control" name="rg" value="<?php echo $rg; ?>">

    <div class="input-group-prepend">
      <span class="input-group-text">Orgão Expeditor</span>
    </div>
    <input type="text" class="form-control" name="orgao" value="<?php echo $orgao; ?>">
     <div class="input-group-prepend">
      <span class="input-group-text">Estado </span>
    </div>
    <input type="text" class="form-control" name="estado" value="<?php echo $estado; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Emissão RG</span>
    </div>
    <input type="text" class="form-control" name="emissao_rg" value="<?php echo $emissao_rg; ?>">
  </div>

   <!-- FIM CASCATA -->
  

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
   <div class="input-group-prepend">
      <span class="input-group-text">N° CTPS</span>
    </div>
    <input type="text" class="form-control" name="numero_ctps" value="<?php echo $numero_ctps; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Série CTPS</span>
    </div>
    <input type="text" class="form-control" name="serie_ctps" value="<?php echo $serie_ctps; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Estado CTPS</span>
    </div>
    <input type="text" class="form-control" name="estado_ctps" value="<?php echo $estado_ctps; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Expedição CTPS</span>
    </div>
    <input type="text" class="form-control" name="expedicao_ctps" value="<?php echo $expedicao_ctps; ?>">
    </div>
   <!-- FIM CASCATA -->


<!-- CASCATA ABAIXO -->
   <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">PIS</span>
    </div>
    <input type="text" class="form-control" name="pis" value="<?php echo $pis; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Cadastro PIS</span>
    </div>
    <input type="text" class="form-control" name="cadastro_pis" value="<?php echo $cadastro_pis; ?>">
  </div>

  <!-- FIM CASCATA -->
  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Instrução</span>
    </div>
    <input type="text" class="form-control" name="instrucao" value="<?php echo $instrucao; ?>">
  </div>


<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">CNH</span>
    </div>
    <input type="text" class="form-control" name="cnh" value="<?php echo $cnh; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Categoria CNH</span>
    </div>
    <input type="text" class="form-control" name="categoria_cnh" value="<?php echo $categoria_cnh; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Validade CNH</span>
    </div>
    <input type="text" class="form-control" name="validade_cnh" value="<?php echo $validade_cnh; ?>">
  </div>

  <!-- FIM CASCATA -->

  <!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Reservista</span>
    </div>
    <input type="text" class="form-control" name="reserva" value="<?php echo $reserva; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Categoria</span>
    </div>
    <input type="text" class="form-control" name="categoria" value="<?php echo $categoria; ?>">
  </div>

  <!-- FIM CASCATA -->

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Titulo Eleitoral</span>
    </div>
    <input type="text" class="form-control" name="titulo_eleitoral" value="<?php echo $titulo_eleitoral; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Zona</span>
    </div>
    <input type="text" class="form-control" name="zona" value="<?php echo $zona; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Seção</span>
    </div>
    <input type="text" class="form-control" name="secao" value="<?php echo $secao; ?>">
  </div>

  <!-- FIM CASCATA -->


<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Banco</span>
    </div>
    <input type="text" class="form-control" name="banco" value="<?php echo $banco; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Conta</span>
    </div>
    <input type="text" class="form-control" name="conta" value="<?php echo $conta; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Digito</span>
    </div>
    <input type="text" class="form-control" name="digito" value="<?php echo $digito; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Agência</span>
    </div>
    <input type="text" class="form-control" name="agencia" value="<?php echo $agencia; ?>">
  </div>

  <!-- FIM CASCATA -->

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Sindicato</span>
    </div>
    <input type="text" class="form-control" name="sindicato" value="<?php echo $sindicato; ?>">
  </div>

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Const. Profis</span>
    </div>
    <input type="text" class="form-control" name="const_profis" value="<?php echo $const_profis; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Registro Profis</span>
    </div>
    <input type="text" class="form-control" name="registro_profis" value="<?php echo $registro_profis; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Registro</span>
    </div>
    <input type="text" class="form-control" name="data_registro" value="<?php echo $data_registro; ?>">
  </div>

  <!-- FIM CASCATA -->


<hr>
<h4 id="cadastro_estrangeiro"><b>CADASTRO DE ESTRANGEIRO</b> <a href="#"><i class="fa fa-arrow-circle-up no-print" style="font-size:24px"></i></a></h4>
<hr>

<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Chegada</span>
    </div>
    <input type="text" class="form-control" name="data_chegada" value="<?php echo $data_chegada; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Tipo Visto</span>
    </div>
    <input type="text" class="form-control" name="tipo_visto" value="<?php echo $tipo_visto; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Carteira RNE</span>
    </div>
    <input type="text" class="form-control" name="carteira_rne" value="<?php echo $carteira_rne; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Validade RNE</span>
    </div>
    <input type="text" class="form-control" name="validade_rne" value="<?php echo $validade_rne; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">N° da Portaria</span>
    </div>
    <input type="text" class="form-control" name="numero_portaria" value="<?php echo $numero_portaria; ?>">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data da Portaria</span>
    </div>
    <input type="text" class="form-control" name="data_portaria" value="<?php echo $data_portaria; ?>">
  </div>


  <hr>
<h4 id="contrato_trabalho"><b>CONTRATO DE TRABALHO</b>  <a href="#"><i class="fa fa-arrow-circle-up no-print" style="font-size:24px"></i></a></h4>
<hr>

<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Admissão</span>
    </div>
    <input type="text" class="form-control" name="admissao" value="<?php echo $admissao; ?>">
  </div>

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Optante FGTS</span>
    </div>
    <input type="text" class="form-control" name="optante_fgts" value="<?php echo $optante_fgts; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Opção</span>
    </div>
    <input type="text" class="form-control" name="data_opcao" value="<?php echo $data_opcao; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">Conta FGTS</span>
    </div>
    <input type="text" class="form-control" name="conta_fgts" value="<?php echo $conta_fgts; ?>">
  </div>

  <!-- FIM CASCATA -->

  <!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Cargo</span>
    </div>
    <input type="text" class="form-control" name="cargo" value="<?php echo $cargo; ?>">
    <div class="input-group-prepend">
      <span class="input-group-text">CBO</span>
    </div>
    <input type="text" class="form-control" name="cbo" value="<?php echo $cbo; ?>">
  </div>

  <!-- FIM CASCATA -->

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Organograma</span>
    </div>
    <input type="text" class="form-control" name="organograma" value="<?php echo $organograma; ?>">
  </div>

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Remuneração</span>
    </div>
    <input type="text" class=" mascara form-control" name="remuneracao" value="<?php echo $remuneracao; ?>" />

    <div class="input-group-prepend">
      <span class="input-group-text">Modo Pagamento</span>
    </div>
    
    <input type="text" class="form-control"  name="modo_pagamento" value="<?php echo $modo_pagamento; ?>" />
    <div class="input-group-prepend">
      <span class="input-group-text">Periodo</span>
    </div>
    <input type="text" class="form-control" name="periodo" value="<?php echo $periodo; ?>">
  </div>

  <!-- FIM CASCATA -->

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Escala</span>
    </div>
    <input type="text" class="form-control" name="escala" value="<?php echo $escala; ?>">
  </div>

   <hr>
  <h4 id="ficha_familiar"><b>FICHA FAMILIAR</b>  <a href="#"><i class="fa fa-arrow-circle-up no-print" style="font-size:24px"></i></a></h4>
<hr>

<table class="table">
  <thead>
    <tr>
    <th class="">NOME</th>
      <th class="">NASCIMENTO</th>
      <th class="">PARENTESCO</th>
      <th class=""></th>

    </tr>
  </thead>
  <tbody>

  <?php
include 'conexaoMysql.php';



$sql = "SELECT* FROM rh_ficha_familiar_funcionario WHERE id_funcionario = '$id_funcionario'";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado)> 0)
{
  while($row = mysqli_fetch_assoc($resultado))
  {
    $nomeparentesco = $row['nome'];
    $nascimentoparentesco = $row['nascimento'];
    $parentesco = $row['parentesco'];
    $id_parentesco = $row['id'];
    echo"<tr>";
    echo"<td>".$nomeparentesco."</td>";
    
    echo"<td>".date('d/m/Y', strtotime($nascimentoparentesco))."</td>";
    echo"<td>".$parentesco."</td>";
    echo"<td><button class='btn btn-sm btn-danger' value='".$id_parentesco."' onclick='Proc_remover_parentesco(this)'><i class='fa fa-remove no-print'></i></button></td>";
    echo"</tr>";
  }
}
else
{

}
?>
</tbody>
</table>

<button class="btn btn-sm btn-block btn-success no-print" type="submit" onclick="Carrega_funcionario_retorno()"><b>ATUALIZAR</b></button>
<input type="hidden" name="id_funcionario_entrada" value="<?php echo $id_entrada_funcionario; ?>"/>
</form>
</div>
<br>



  <script src="/mobile/SCRIPTS/vendor/jquery/jquery.min.js"></script>
  <script src="/mobile/SCRIPTS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
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



</body>

</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>  
	</head>
  <script>
$(function(){
   $(".mascara").maskMoney({
    thousands:'.', decimal:','
  
   });
});
</script>
<!-- MODAL ADICIONAR PARENTESCO -->


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
       <h4 class="modal-title"><i>Adicionar Parentesco</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

      
        <br>
        <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Nome</span>
    </div>
    <input type="text" class="form-control" id="nome" />
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Nascimento</span>
    </div>
    <input type="date" class="form-control" id="nascimento" />
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Parentesco</span>
    </div>
    <input type="text" class="form-control" id="parentesco" />
  </div>

      <input type="hidden" id="id_func_adiciona_parentesco" value="<?php echo $id_funcionario; ?>" />
      <br>
      
      <button type="sumbit" class="btn btn-primary btn-sm btn-block" onclick="Proc_adiciona_parentesco()"><i class="fa fa-check-circle"></i> OK</button>
        </div> 
     
        </div>
      </div>
    </div>
  </div>
  
</div>


<!-- FIM MODAL ADICIONAR PARENTESCO -->


<!-- MODAL ADICIONAR DOCUMENTO -->


<!-- The Modal -->
<div class="modal fade" id="myModalDocumentos">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
       <h4 class="modal-title"><i>Adicionar Documentos</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

        <form action="/SERVIDOR/FINANCEIRO/DOCUMENTOS/upload_documentos.php" method="POST" enctype="multipart/form-data" target="_blank">
      

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Descrição</span>
    </div>
    <textarea type="text" class="form-control" rows="3" name="descricao"></textarea>
  </div>
  <br>
  <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="arquivo">
      <label class="custom-file-label" for="customFile">Escolher o documento</label>
    </div>
      <input type="hidden" name="dir" value="DOCUMENTOS">
      <input type="hidden" name="id_funcionario" value="<?php echo $id_funcionario; ?>" />
      <br>
      
      <button type="sumbit" class="btn btn-primary btn-sm btn-block"><i class="fa fa-check-circle"></i> OK</button>
        </div> 
       </form>
        </div>
      </div>
    </div>
  </div>
  
</div>




<!-- FIM MODAL ADICIONAR DOCUMENTO -->


<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>